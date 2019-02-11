@extends('layouts.app')

	@section('title', 'Provider Edit')

		@section('content')
	<form class="form-group" method="POST" action="/providers/{{$provider->slug}}" enctype="multipart/form-data">
			    @method('PUT')
				@csrf
				<div class="form-group">
					<label for=""> Nombre </label>
					<input type="text" name="name" value="{{$provider->name}}" class="form-control">
				</div>

				<div class="form-group">
					<label for=""> Logos </label>
					<input type="file" name="logo">
				</div>

					<button type="submit" class="btn btn-primary">Actualizar</button>
			</form>
		@endsection