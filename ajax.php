<?php
include 'koneksi.php';
$restoran = $_GET['restoran'];
$query = mysqli_query($koneksi, "select * from tb_restoran where restoran='$restoran'");
$d = mysqli_fetch_array($query);
$dt = array(
            'makanan'      =>  $d['makanan'],
            'harga'   =>  $d['harga'],);
 echo json_encode($dt);
?>