<?php

namespace App\Http\Controllers;

use App\Guest;

use Illuminate\Http\Request;

class GuestsController extends Controller
{
	public function index()
	{
		$guests = Guest::all();

		return view('guests.index', compact('guests'));
	}

	public function create()
	{
		return view('guests.create');
	}

	public function show(Guest $guest)
	{
		return view('guests.show', compact('guest'));
	}

	public function edit(Guest $guest)
	{
		return view('guests.edit', compact('guest'));
	}

	public function update(Guest $guest)
	{
		$guest->update(request([
			'first_name',
			'last_name',
			'email',
			'phone_number',
			'gender',
			'address'
		]));

		return redirect('/guests');
	}

	public function destroy(Guest $guest)
	{
		$guest->delete();

		return redirect('/guests');
	}

	public function store()
	{
		Guest::create(
			request()->validate([
				'first_name' => 'required',
				'last_name' => 'required',
				'email' => 'required',
				'phone_number' => '',
				'gender' => 'required',
				'address' => 'required'
			])
		);

		return redirect('/guests');
	}
}
