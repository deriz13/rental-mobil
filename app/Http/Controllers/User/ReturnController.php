<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;


class ReturnController extends Controller
{
    public function showReturnForm()
    {
        return view('users.booking.carsreturn');
    }

    public function processReturn(Request $request)
    {
        $request->validate([
            'no_plat' => 'required|string|max:255',
        ]);

        $licensePlate = $request->input('no_plat');

        $booking = Booking::whereHas('car', function ($query) use ($licensePlate) {
            $query->where('no_plat', $licensePlate);
        })->whereNull('return_date')->first();

        if (!$booking) {
            return redirect()->route('return_mobile')->with('error', 'Mobil dengan nomor plat tersebut tidak ditemukan atau sudah dikembalikan.');
        }

        $startDate = Carbon::parse($booking->start_date);
        $endDate = Carbon::parse($booking->end_date);
        $durationInDays = $endDate->diffInDays($startDate) + 1;
        $rentalRate = $booking->car->rental_rate_day;

        $totalRentalCost = $rentalRate * $durationInDays;
        $booking->return_date = now();
        $booking->rental_cost = $totalRentalCost;
        $booking->save();

        return redirect()->route('rental_listing')->with('success', 'Mobil berhasil dikembalikan. Biaya sewa: Rp ' . number_format($totalRentalCost, 0, ',', '.'));
    }
}
