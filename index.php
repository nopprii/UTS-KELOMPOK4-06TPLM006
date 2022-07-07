<!DOCTYPE html>
<html>
<head>
	<title>UAS KELOMPOK5</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="judul">		
		<h1>Data Pemesanan Makanan</h1>
		<h3><p><b><span id="jam" style="font-size:24"></span></b></p>
    
    <script type="text/javascript">
        window.onload = function() { jam(); }
       
        function jam() {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getdours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());
       
            e.innerHTML = h +':'+ m +':'+ s;
       
            setTimeout('jam()', 1000);
        }
       
        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script></h3>
	</div>
	<br/>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	 <center>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<td>No</td>
			<td>Restoran</td>
			<td>Makanan</td>
			<td>Harga</td>
			<td>nama</td>
			<td>hp</td>
			<td>email</td>
			<td>Option</td>		
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_uas");
		while($d = mysqli_fetch_array($data)){
			?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['restoran']; ?></td>
			<td><?php echo $d['makanan']; ?></td>
			<td><?php echo $d['harga']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['hp']; ?></td>
			<td><?php echo $d['email']; ?></td>
			<td>
				<a href="update.php?id=<?php echo $d['id']; ?>">EDIT</a>
				<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
	<a href="logout.php" class="btn">Logout</a>
</center>
</body>
</html>