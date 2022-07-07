<!DOCTYPE html>
<html>
<head>
	<title>UAS</title>
</head>
<body>
	
	<h2><center>Data Pemesanan Makanan</center></h2>
	<h4><center>Per 6 Juli 2022 19:38</center></h4>
	<br/>
	<a href="index.php">+ TAMBAH MAKANAN</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Jenis Restoran</th>
			<th>Makanan</th>
			<th>Harga</th>
			<th>Nama Lengkap</th>
			<th>No Hp</th>
			<th>Email</th>

		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from db_uas");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['jenis restoran']; ?></td>
				<td><?php echo $d['makanan']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['hp']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>