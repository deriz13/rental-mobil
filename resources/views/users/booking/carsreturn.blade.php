@extends('users.layouts.app')
@section('content_users')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pengembalian Mobil</div>

                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('process_return') }}">
                        @csrf

                        <div class="form-group">
                            <label for="no_plat">Nomor Plat Mobil</label>
                            <input type="text" class="form-control" id="no_plat" name="no_plat" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Kembalikan Mobil</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection