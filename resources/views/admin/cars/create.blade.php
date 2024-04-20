@extends('layouts.app')

@section('title')
Agenda
@endsection

@section('breadcrumb')
<nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
@endsection

@section('content')

@if (Session::has('error'))
	<div class="alert alert-danger alert-dismissible" role="alert">
		{{ Session::get('error') }}
	</div>
@endif

<div class="row">
	<div class="col-md-12">
		<div class="card">
		<form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
		@csrf
			<div class="card-header">
				<div class="card-title">Tambah Agenda</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="form-group @if ($errors->has('avatar')) has-error @endif col-md-6 col-lg-6">
						<label for="avatar">Foto</label>
						<input type="file" name="avatar" class="form-control">
						@if ($errors->has('avatar'))
							<small class="form-text help-block" style="color:red">{{ $errors->first('avatar') }}</small>
						@endif
					</div>
					<div class="form-group 	@if ($errors->has('name')) has-error @endif col-md-6 col-lg-6">
						<label for="email2">Nama</label>
						<input type="text" name="name" class="form-control">
						@if ($errors->has('name')) <small class="form-text help-block" style="color:red">{{ $errors->first('name') }}</small> @endif
					</div>
					<div class="form-group 	@if ($errors->has('model')) has-error @endif col-md-6 col-lg-6">
						<label for="email2">Model</label>
						<input type="text" name="model" class="form-control">
						@if ($errors->has('model')) <small class="form-text help-block" style="color:red">{{ $errors->first('model') }}</small> @endif
					</div>
					<div class="form-group 	@if ($errors->has('no_plat')) has-error @endif col-md-6 col-lg-6">
						<label for="email2">No plat</label>
						<input type="text" name="no_plat" class="form-control">
						@if ($errors->has('no_plat')) <small class="form-text help-block" style="color:red">{{ $errors->first('no_plat') }}</small> @endif
					</div>
					<div class="form-group 	@if ($errors->has('rental_rate_day')) has-error @endif col-md-6 col-lg-6">
						<label for="email2">Tarif Sewa </label>
						<input type="text" name="rental_rate_day" class="form-control">
						@if ($errors->has('rental_rate_day')) <small class="form-text help-block" style="color:red">{{ $errors->first('rental_rate_day') }}</small> @endif
					</div>
				</div>
      		</div>

      <div class="card-action">
				<button class="btn btn-success">Submit</button>
				<a href="{{ route('cars.index') }}" class="btn btn-danger">Cancel</a>
			</div>
			</form>

    </div>
  </div>
</div>
@endsection