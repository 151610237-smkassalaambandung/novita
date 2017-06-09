<!DOCTYPE html>
<html>
<head>
	<title>Looping</title>
</head>
<body>
	<br>
		
		<td> Daftar : <b>{{$data}}</b> <b>{{$data2}}</b>  </td>
		@foreach($chen as $data)
		
			<li>{{$data}}</li>

		@endforeach

	
	</br>

			
</body>
</html>