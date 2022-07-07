<?php 
include 'koneksi.php';
$restoran = $_POST['restoran'];
$makanan = $_POST['makanan'];
$harga = $_POST['harga'];
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$email = $_POST['email'];

 
mysqli_query($koneksi, " INSERT INTO tb_uas VALUES ('','$restoran','$makanan','$harga','$nama','$hp','$email')");
 
header("location:index.php?pesan=input");

?>