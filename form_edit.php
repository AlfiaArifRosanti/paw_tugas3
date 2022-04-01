<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Form Tambah Status Pengiriman</title>
</head>
<body class="bg">
<?php
 include 'koneksi.php';
 $id=$_GET['id'];
$sql = "SELECT * FROM tbl_151 where NoResi=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}

?>

<h1 class="text-center">Form Tambah Status Pengiriman</h1>
<?php
while ($row = mysqli_fetch_array($hasil))
{
?>

    <form class="posisi" method="post" action="update.php">
        <table>
            <tr>
                <td collspan="2"> <input type="hidden" name="NoResi" value="<?php echo $row['NoResi']?>"></td>
            </tr>
            <tr>
                <td>NamaBarang :</td>
                <td><input type="text" name="NamaBarang" value="<?php echo $row['NamaBarang']?>"></td>
            </tr>
            <tr>
                <td>BeratBarang :</td>
                <td><input type="text" name="BeratBarang" value="<?php echo $row['BeratBarang']?>"></td>
            </tr>
            <tr>
                <td>Ekspedisi :</td>
                <td> <input type="text" name="Ekspedisi" value="<?php echo $row['Ekspedisi']?>"></td>
            </tr>
            <tr>
                <td>Status Pengiriman :</td>
                <td><input type="text" name="StatusPengiriman" value="<?php echo $row['StatusPengiriman']?>"></td>
            </tr>
        </table>
        <button class="btn btn-info" type="submit">Update</button>
    </form>
<?php }?>
</body>
</html>