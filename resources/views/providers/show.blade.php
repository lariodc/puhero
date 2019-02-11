@extends('layouts.app')

	@section('title', 'Providers')

		@section('content')

<img style="height: 200px;width: 200px;background-color:#eaefa0;    margin: 20px;"class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$provider->logo}}" alt="">
<div class="text-center">
	<h5 class="card-title"> {{$provider->name}} </h5>
	{{--<h1> {{$provider->slug}} </h1>--}}
	<p class="card-text">
		Triple digital plus: $117900
	</p>
	<p class="card-text">
		Triple digital basico: $9900
	</p>
{{--<a href="#" class="btn btn-primary">Hacer comparativa con Tigo-Une</a>
<a href="#" class="btn btn-primary">Hacer comparativa con Movistar</a>--}}

<a href="/providers/{{$provider->slug}}/edit" class="btn btn-primary">Editar</a>


</div>
			
		@endsection
