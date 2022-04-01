<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Status Pengiriman</title>
</head>
<body class="bg">
<h1 class="text-center">Status Pengiriman </h1>
<a class="btn btn-success" href="form_pengiriman.php">Tambah data</a>
<table class="table">
    <tr>
        <td>NoResi</td>
        <td>NamaBarang</td>
        <td>BeratBarang</td>
        <td>Ekspedisi</td>
        <td>StatusPengiriman</td>
        <td>Action</td>
    </tr>
        <?php
        include 'koneksi.php';
        $sql="SELECT * FROM tbl_151";
        $hasil = mysqli_query($koneksi, $sql);
        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tr>
            <td><?=$row['NoResi'];?></td>
            <td><?=$row['NamaBarang'];?></td>
            <td><?=$row['BeratBarang'];?></td>
            <td><?=$row['Ekspedisi'];?></td>
            <td><?=$row['StatusPengiriman'];?></td>
            <td><a class="btn btn-outline-primary" href="form_edit.php?id=<?=$row['NoResi']?>"> Edit</a> | <a class="btn btn-outline-danger" href="delete.php?id=<?=$row['NoResi']?>"> Delete</td>
        </tr>
        <?php }
        ?> 
</table> 
</body>
</html>
