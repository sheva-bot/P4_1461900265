<!DOCTYPE html>
<html>
<head>
	<title>Export Laporan Excel Pada Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<center>
			<br><br>
		</center>
		
		<a href="/buku/export_excel" target="_blank">EXPORT</a>
		
		<table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>Judul</th>
					<th>Tahun Terbit</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($buku as $s)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$s->judul}}</td>
					<td>{{$s->tahun_terbit}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

</body>
</html>