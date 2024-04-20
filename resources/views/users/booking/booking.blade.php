@extends('users.layouts.app')
@section('content_users')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pemesanan Mobil: {{ $car->name }}</div>
                <div class="text-center mb-3">
                    <img src="{{ asset('uploads/cars/' . $car->avatar) }}" alt="Avatar Mobil" class="img-fluid" style="max-width: 200px;">
                </div>
                <div class="card-body">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('booking.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="car_id" value="{{ $car->id }}">
                        
                        <div class="form-group">
                            <label for="start_date">Tanggal Mulai</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="end_date">Tanggal Selesai</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Sewa Mobil</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection