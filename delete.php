<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql="DELETE FROM tbl_151 WHERE NoResi=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Delete Status Pengiriman gagal";
}else{
    echo "Status Pengiriman di delete<br>";
    echo "<a href='data_pengiriman.php'> Show data</a>";
}

?>