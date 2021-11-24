<!DOCTYPE html>
<html>
<head>
	<title>Data Penduduk Batu urip</title>
</head>
<body>
 

	<h3>Data Penduduk</h3>
 
	<a href="/penduduk"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/penduduk/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="Nama" required="required"> <br/>
		Jenis Kelamin <input type="text" name="Jenis Kelamin" required="required"> <br/>
		Agama<input type="text" name="Agama" required="required"> <br/>
		Alamat <textarea name="Alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>