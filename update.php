<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$restoran = $_POST['restoran'];
$makanan = $_POST['makanan'];
$harga = $_POST['harga'];
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$email = $_POST['email'];
 
// update data ke database
mysqli_query($koneksi,"update tb_uas set restoran='$restoran', makanan='$makanan', harga='$harga', nama='$nama', hp='$hp', email='$email' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>