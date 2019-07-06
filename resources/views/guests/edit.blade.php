@extends('layout')

@section('content')
<h1 class="title">Edit Project</h1>

<form method="POST" action="/guests/{{ $guest->id }}">
	@method('PATCH')
	@csrf
	
	<div class="field">
			<div class="control">
				<input type="text" class="input {{ $errors->has('first_name') ? 'is-danger' : '' }}" name="first_name" placeholder="First Name" value="{{ $guest->first_name }}" required>
			</div>
		</div>

		<div class="field">
			<div class="control">
				<input type="text" class="input {{ $errors->has('last_name') ? 'is-danger' : '' }}" name="last_name" placeholder="Last Name" value="{{ $guest->last_name }}" required>
			</div>
		</div>

		<div class="field">
			<div class="control">
				<input type="text" class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" placeholder="Email" value="{{ $guest->email }}" required>
			</div>
		</div>

		<div class="field">
			<div class="control">
				<input type="text" class="input {{ $errors->has('phone_number') ? 'is-danger' : '' }}" name="phone_number" placeholder="Phone Number" value="{{ $guest->phone_number }}">
			</div>
		</div>

		<div class="field">
			<div class="control">
				<input type="text" class="input {{ $errors->has('gender') ? 'is-danger' : '' }}" name="gender" placeholder="Gender" value="{{ $guest->gender }}" required>
			</div>
		</div>

		<div class="field">
			<div class="control">
				<textarea name="address" class="input {{ $errors->has('address') ? 'is-danger' : '' }}" placeholder="Address" rows="3" required>{{ $guest->address }}</textarea>
			</div>
		</div>

		<div class="field">
			<div class="control">
				<button class="button is-link">Update Guest</button>
			</div>
		</div>
</form>

<form method="POST" action="/guests/{{ $guest->id }}" style="margin-top:1rem;">
	@method('DELETE')
	@csrf

	<div class="field">
		<div class="control">
			<button class="button is-danger">Delete Guest</button>
		</div>
	</div>
</form>
@endsection