<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

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

        $booking->return_date = now();
        $booking->save();

        return redirect()->route('return_mobile')->with('success', 'Mobil berhasil dikembalikan.');
    }
}
