@extends('users.layouts.app')
@section('content_users')

<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1>Daftar Mobil yang Disewa</h1>

    @if ($carsRented->isEmpty())
        <p>Tidak ada mobil yang sedang disewa.</p>
    @else
        <div class="row">
            @foreach ($carsRented as $booking)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('uploads/cars/' . $booking->car->avatar) }}" class="card-img-top" alt="{{ $booking->car->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $booking->car->name }}</h5>
                            <p class="card-text">
                                Tanggal Mulai: {{ $booking->start_date }}<br>
                                Tanggal Selesai: {{ $booking->end_date }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
    
@endsection