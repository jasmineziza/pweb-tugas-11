<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-pegawai.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pegawai WHERE id=$id";
$query = mysqli_query($db, $sql);
$pegawai = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Pegawai | SMK Coding</title>
	<link rel="stylesheet" href="./styles.css">
</head>

<body>
	<header>
		<h3>Formulir Edit Pegawai</h3>
	</header>
	
	<form action="proses-edit-pegawai.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $pegawai['id'] ?>" />
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $pegawai['nama'] ?>" />
		</p>
		<p>
			<label for="jabatan">Jabatan: </label>
			<textarea name="jabatan"><?php echo $pegawai['jabatan'] ?></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<?php $jk = $pegawai['jenis_kelamin']; ?>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
		</p>
		<p>
			<label for="agama">Agama: </label>
			<?php $agama = $pegawai['agama']; ?>
			<select name="agama">
				<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
				<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
				<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
				<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
				<option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
			</select>
		</p>
		<p>
			<label for="email">Email: </label>
			<input type="text" name="email" placeholder="email" value="<?php echo $pegawai['email'] ?>" />
		</p>
        <p>
			<label for="alamat">Alamat: </label>
			<input type="text" name="alamat" placeholder="alamat" value="<?php echo $pegawai['alamat'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>