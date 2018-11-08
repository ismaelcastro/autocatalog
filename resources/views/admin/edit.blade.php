@extends('layouts.principal')

@section('content')
	<h2>Update a car</h2>
	<div>
		@if(session('msg'))
			<div class="alert label-important">
				{{session('msg')}}
			</div>
		@endif
		{!!form($form)!!}
	</div>
@stop