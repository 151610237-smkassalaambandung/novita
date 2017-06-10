<!DOCTYPE html>
<html>
<head>
	<title>Looping</title>
</head>
<body>
	<br>
		
		<td>Daftar : <b>{{$data}} {{$data2}}</b></br>
		@foreach($chen as $key)

		<ul>
			<li>{{$key}}</li>
		</ul>

		@endforeach

	
	</br>

			
</body>
</html>