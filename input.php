<!DOCTYPE html>
<html>
<head>
	<title>UAS</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
		function isi_otomatis(){
			var restoran = $("restoran").val();
			$.ajax({
				url: 'ajax.php',
				dt:"restoran="+restoran ,
			}).success(function (dt) {
				var json = dt,
				obj = JSON.parse(json);
				$('#makanan').val(obj.makanan);
				$('#harga').val(obj.harga);
			});
		}
	</script>
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
					h = d.getHours();
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

		<a href="index.php">Lihat Semua Data</a>

		<br/>
		<h3>Input data baru</h3>
		<form action="input-aksi.php" method="post">		
			<table>
				<tr>
					<label>Pilih Restoran</label>
					<select name="restoran" style="width:160px;">
						<?php
						include "koneksi.php";

						$data    =mysqli_query($koneksi, "SELECT * FROM tb_restoran ");
						while ($d = mysqli_fetch_array($data)) {
							?>
							<option value="<?=$d['restoran'];?>"><?php echo $d['restoran'];?></option>
							<?php
						}
						?>
					</tr>
					<br>
					<tr>
						<td>Makanan</td>
						<td><input type="text" id="makanan" disabled></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td><input type="text" id="harga" disabled></td>

					</tr>
					<tr>
						<td>Alamat</td>
						<td><input type="text" name="alamat"></td>					
					</tr>	
					<tr>
						<td>Nama</td>
						<td><input type="text" name="nama"></td>					
					</tr>	
					<tr>
						<td>No Hp</td>
						<td><input type="text" name="hp"></td>					
					</tr>
					<tr>
						<td>email</td>
						<td><input type="text" name="email"></td>					
					</tr>	
					<tr>
						<td></td>
						<td><input type="submit" value="Simpan"></td>					
					</tr>				
				</table>
			</form>
		</body>
		</html>