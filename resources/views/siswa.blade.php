<!DOCTYPE html>
<html>
<head>
	<title>Siswa</title>
</head>
<body>
	<center>
	<table border ="1">

		
			<tr class="bg-info">
				<th>Id</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis kelamin</th>
			</tr>
			<?php
				$no =1;
			?>
			
			<tr>
				<td>{{$no++}}</td>
				<td>{{$siswa->nama}}</td>
				<td>{{$siswa->alamat}}</td>
				<td>{{$siswa->jk}}</td>
			</tr>
			

	</table>
	</center>
</body>
</html>