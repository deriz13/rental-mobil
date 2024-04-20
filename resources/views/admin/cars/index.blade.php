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
                    <button class="btn btn-primary">Create Cars</button>
                </div>
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>model</th>
                    <th>Nomor Plat</th>
                    <th>Tarif Sewa Perhari</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Unity Pugh</td>
                    <td>9958</td>
                    <td>Curicó</td>
                    <td>2005/02/11</td>
                    <td>37%</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      @endsection