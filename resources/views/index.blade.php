@extends('layout')

@section('content')
<h1 class="title is-pulled-left">Guest Book</h1>
<a class="button is-primary is-pulled-right" href="/guests/create">Add New Guest</a>

<table class="table is-fullwidth is-bordered is-striped is-hoverable">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Actions</th>
		</tr>
	</thead>
	@foreach ($guests as $guest)
	<tr>
		<td>{{ $guest->first_name }}</td>
		<td>{{ $guest->last_name }}</td>
		<td>{{ $guest->email }}</td>
		<td>{{ $guest->phone_number }}</td>
		<td>{{ $guest->gender }}</td>
		<td>{{ $guest->address }}</td>
		<td>
			<form method="POST" action="/guests/{{ $guest->id }}">
				@method('DELETE')
				@csrf
				<a class="button is-link" href="/guests/{{ $guest->id }}/edit">Edit Guest</a>
				<button class="button is-danger">Delete Guest</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
@endsection