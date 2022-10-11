<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
		<tr>
			<th>Arab</th>
			<th>Latin</th>
            <th>Arti</th>
		</tr>
		@foreach($Data['Data'] as $s)
		<tr>
			<td>{{ $s['arab'] }}</td>
			<td>{{ $s['latin'] }}</td>
            <td>{{ $s['arti']}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>
