@extends('layouts.app')

	@section('title', 'Providers Create')

		@section('content')
			<form class="form-group" method="POST" action="/providers" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for=""> Nombre </label>
					<input type="text" name="name" class=" form-control">
				</div>

				<div class="form-group">
					<label for=""> Logos </label>
					<input type="file" name="logo">
				</div>

					<button type="submit" class="btn btn-primary"> Guardar </button>
			</form>
		@endsection


