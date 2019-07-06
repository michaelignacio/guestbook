@extends('layout')

@section('content')
<h1 class="title">Create Guest</h1>

	<form method="POST" action="/guests">
		{{ csrf_field() }}

		<div class="field">
			<div class="control">
				<input type="text" class="input {{ $errors->has('first_name') ? 'is-danger' : '' }}" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required>
			</div>
		</div>

		<div class="field">
			<div class="control">
				<input type="text" class="input {{ $errors->has('last_name') ? 'is-danger' : '' }}" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required>
			</div>
		</div>

		<div class="field">
			<div class="control">
				<input type="text" class="input {{ $errors->has('email') ? 'is-danger' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required>
			</div>
		</div>

		<div class="field">
			<div class="control">
				<input type="text" class="input {{ $errors->has('phone_number') ? 'is-danger' : '' }}" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}">
			</div>
		</div>

		<div class="field">
			<div class="control">
				<input type="text" class="input {{ $errors->has('gender') ? 'is-danger' : '' }}" name="gender" placeholder="Gender" value="{{ old('gender') }}" required>
			</div>
		</div>

		<div class="field">
			<div class="control">
				<textarea name="address" class="input {{ $errors->has('address') ? 'is-danger' : '' }}" placeholder="Address" rows="3" required>{{ old('address') }}</textarea>
			</div>
		</div>

		<div class="field">
			<div class="control">
				<button class="button is-link">Create Guest</button>
			</div>
		</div>

		@if ($errors->any())
			<div class="notification is-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	</form>
@endsection