@extends('layout')

@section('title', 'Welcome to SuperAdmin - Dashboard')
@section('page_title', 'Dashboard')

@section('content')

<div class="box">
	<div class="box-header">
		<h3 class="box-title">Superheroes</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body no-padding">
		<table class="table table-striped">
			<tbody>
				<tr>
					<th style="width: 10px">#</th>
					<th>Name</th>
					<th>Gender</th>
					<th>Affiliation</th>
				</tr>

				@foreach ($superheroes as $superhero)
					<tr>
						<td>{{ $superhero['id'] }}.</td>
						<td>{{ $superhero['name'] }}</td>
						<td>{{ $superhero['gender'] }}</td>
						<td>{{ $superhero['afn_id'] }}</td>
					</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>

@endsection