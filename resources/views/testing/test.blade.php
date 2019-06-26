<!DOCTYPE html>
<html>
<head>
	<title>testing</title>
</head>
<body>
<form method="POST" action="{{ url('addSupplier') }}">
	{{ csrf_field() }}
	<label>nama</label><input type="text" name="nama">
	<label>alamat</label><input type="text" name="alamat">
	<label>no. hp</label><input type="text" name="tlp">
	<input type="submit" name="" value="tambah">
</form>
@foreach($data as $i)
	{{$i->nama}}
@endforeach
</body>
</html>