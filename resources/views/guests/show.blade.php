@extends('layout')

@section('content')
	<h1 class="title">{{ $guest->first_name }} {{ $guest->last_name }} </h1>

	<div class="content">
		<p><a href="/guests/{{ $guest->id }}/edit">Edit</a></p>
	</div>

@endsection