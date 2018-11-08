@extends('layouts.principal')

@section('content')
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Modelo</th>
				<th>Marca</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@forelse($cars as $car)
			<tr>
				<td>{{$car->modelo}}</td>
				<td>{{$car->marca}}</td>
				<td><a class="btn btn-primary" href="">Visualizar</a> <a class="btn btn-danger" href="">Excluir</a></td>
			</tr>
			@empty
			<p>There are no cars to display</p>
			@endforelse
			
		</tbody>
	
	</table>
@stop