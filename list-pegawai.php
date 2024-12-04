<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Pegawai Baru | SMK Coding</title>
	<link rel="stylesheet" href="./styles.css">

</head>

<body>
	<header>
		<h3>Pegawai yang sudah mendaftar</h3>
	</header>
	
	<nav>
		<a href="form-pegawai.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Email</th>
            <th>Alamat</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM pegawai";
		$query = mysqli_query($db, $sql);
		
		while($pegawai = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$pegawai['id']."</td>";
			echo "<td>".$pegawai['nama']."</td>";
            echo "<td>".$pegawai['jabatan']."</td>";
			echo "<td>".$pegawai['jenis_kelamin']."</td>";
			echo "<td>".$pegawai['agama']."</td>";
			echo "<td>".$pegawai['email']."</td>";
			echo "<td>".$pegawai['alamat']."</td>";
			
			echo "<td>";
			echo "<a href='edit-pegawai.php?id=".$pegawai['id']."'>Edit</a> | ";
			echo "<a href='hapus-pegawai.php?id=".$pegawai['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>

	<button class="back" onclick="window.location.href='index.php'">Kembali</button>
	
	</body>
</html>