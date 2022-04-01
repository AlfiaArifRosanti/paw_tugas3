<?php
include "koneksi.php";

$NamaBarang = $_POST['NamaBarang'];
$BeratBarang = $_POST['BeratBarang'];
$Ekspedisi = $_POST['Ekspedisi'];
$StatusPengiriman = $_POST['StatusPengiriman'];

$sql = "INSERT INTO tbl_151 VALUES(null,'$NamaBarang','$BeratBarang','$Ekspedisi','$StatusPengiriman')";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi tambah Status Pengiriman gagal";
}else{
    echo "Eksekusi tambah Status Pengiriman berhasil<br>";
    echo "<a href='data_pengiriman.php'>Show data</a>";
}

?>