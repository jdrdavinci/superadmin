@extends('layout')

@section('title', 'Welcome to SuperAdmin - Dashboard')

@section('content')
	<ul>
		@foreach ($superheroes as $superhero)
			<li>This is superhero {{ $superhero['name'] }}</li>
		@endforeach
	</ul>
@endsection
