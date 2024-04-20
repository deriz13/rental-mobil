<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cars;
use App\Models\Booking;
use Illuminate\Support\Facades\Session;
use Auth;

class BookingController extends Controller
{

    public function index($id)
    {
        $car = Cars::find($id);

        if (!$car) {
            return redirect()->back()->with('error', 'Mobil tidak ditemukan.');
        }
        return view('users.booking.booking', compact('car'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'car_id' => 'required|exists:cars,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);
    
        // Memeriksa ketersediaan mobil dalam rentang tanggal
        $carId = $validated['car_id'];
        $startDate = $validated['start_date'];
        $endDate = $validated['end_date'];
    
        $existingBooking = Booking::where('car_id', $carId)
            ->where(function ($query) use ($startDate, $endDate) {
                $query->where(function ($q) use ($startDate, $endDate) {
                    $q->whereBetween('start_date', [$startDate, $endDate])
                        ->orWhereBetween('end_date', [$startDate, $endDate]);
                })->orWhere(function ($q) use ($startDate, $endDate) {
                    $q->where('start_date', '<', $startDate)
                        ->where('end_date', '>', $startDate);
                })->orWhere(function ($q) use ($startDate, $endDate) {
                    $q->where('start_date', '<', $endDate)
                        ->where('end_date', '>', $endDate);
                });
            })->exists();
    
        if ($existingBooking) {
            return redirect()->back()->with('error', 'Mobil tidak tersedia pada rentang tanggal yang dipilih.');
        }
    
        try {
            Booking::create([
                'car_id' => $carId,
                'user_id' => Auth::id(),
                'start_date' => $startDate,
                'end_date' => $endDate,
            ]);
    
            return redirect()->route('cars.booking', ['id' => $carId])
                ->with('success', 'Mobil Berhasil Disewa');
        } catch(\Exception $e) {
            dd($e);
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan pemesanan.');
        }
    }

    public function carsRental()
    {
        $user = Auth::user();
    
        $carsRented = $user->bookings()->with('car')->get();
    
        return view('users.booking.carsbooking', compact('carsRented'));
    }
}
