<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guests</title>
</head>
<body>
	<h1>Guests</h1>
	@foreach ($guests as $guest)
		{{ $guest->first_name }}
	@endforeach
</body>
</html>