<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Pegawai Baru | SMK Coding</title>
	<link rel="stylesheet" href="./styles.css">
</head>

<body>
	<header>
		<h3>Formulir Pendaftaran Pegawai Baru</h3>
	</header>
	
	<form action="proses-pegawai.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="jabatan">Jabatan: </label>
			<textarea name="jabatan" placeholder="jabatan"></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
		</p>
		<p>
			<label for="agama">Agama: </label>
			<select name="agama">
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Budha</option>
				<option>Atheis</option>
			</select>
		</p>
		<p>
			<label for="email">Email: </label>
			<input type="text" name="email" placeholder="email" />
		</p>
        <p>
			<label for="alamat">Alamat: </label>
			<input type="text" name="alamat" placeholder="alamat" />
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>