<!DOCTYPE html>
<html>
<head>
	<title>1461900265</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
	<a href="/databuku">Data Buku</a>
	<a href="/rakbuku">Rak Buku</a>
	<a href="/user">User</a>
	<br><br>
	<table cellspacing='0'>
		<thead>

			<tr>
				<th>Nomor</th>
				<th>Judul Buku</th>
				<th>Tahun Terbit</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
						      @foreach ($item as $key => $i)
			<tr>
				<td>{{$key+1}}</td>
				<td>{{ $i->judul }}</td>
				<td>{{ $i->tahun_terbit }}</td>
				<td>
					<button>Edit</button>
					<button>Hapus</button>
					<a href="/buku">Export</a>
				</td>
			</tr>
		</tbody>
		      @endforeach
	</table>
</body>
</html>