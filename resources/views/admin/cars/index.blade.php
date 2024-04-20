@extends('layouts.app')

@section('title')
Cars
@endsection

@section('breadcrumb')
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-3">
                  <h5 class="card-title">Cars Table</h5>
                  <a href="{{ route('cars.create') }}" class="btn btn-primary">Create Cars</a>
              </div>
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>model</th>
                    <th>Nomor Plat</th>
                    <th>Tarif Sewa Perhari</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($cars as $car)
                    <tr>
                      <td>{{ $loop->index + 1 }}</td>
                      <td><img src="{{ asset('uploads/cars/' . $car->avatar) }}" style="max-width: 100px; max-height: 100px;" /></td>
                      <td>{{ $car->name }}</td>
                      <td>{{ $car->model }}</td>
                      <td>{{ $car->no_plat }}</td>
                      <td>{{ $car->rental_rate_day }}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>
      </div>
  </div>
@endsection