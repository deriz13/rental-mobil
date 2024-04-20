@extends('users.layouts.app')
@section('content_users')

    <div class="container-fluid pt-5">
        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <form action="{{ route('cars.search') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Cari mobil berdasarkan merk...">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Mobil Yang tersedia</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
        @foreach ($cars as $car)
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100%" src="{{ asset('uploads/cars/' . $car->avatar) }}" alt="">
                    </div>
                    
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{ $car->name }}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>Rp. {{ $car->rental_rate_day }} / Hari</h6>
                        </div>
                    </div>
                    <div class="card-footer text-center bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0">
                            <i class="fas fa-eye text-primary mr-1"></i>Sewa
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
       
    </div>
    
@endsection