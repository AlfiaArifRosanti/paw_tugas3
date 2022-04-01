<?php
include "koneksi.php";
$id = $_POST['NoResi'];
$NamaBarang = $_POST['NamaBarang'];
$BeratBarang = $_POST['BeratBarang'];
$Ekspedisi = $_POST['Ekspedisi'];
$StatusPengiriman = $_POST['StatusPengiriman'];

$sql = "UPDATE tbl_151 set NamaBarang = '$NamaBarang', BeratBarang= '$BeratBarang', Ekspedisi='$Ekspedisi', StatusPengiriman ='$StatusPengiriman' where NoResi=$id";
$hasil =mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi update Status Pengiriman gagal";
}else{
    echo "Eksekusi update Status Pengiriman berhasil<br>";
    echo "<a href='data_pengiriman.php'>Show data</a>";
}

?>