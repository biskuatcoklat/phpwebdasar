<?php
if( !isset($_GET["nama"]) || 
    !isset($_GET["NIK"]) || 
    !isset($_GET["JABATAN"])||
    !isset($_GET["EMAIL"])||
    !isset($_GET["Alamat"]))
{
    header("Location : latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail karyawan</title>
</head>
<body>
    <ul>
        <li><img src ="img/network.jpg"></li>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["NIK"]; ?></li>
        <li><?php echo $_GET["JABATAN"]; ?></li>
        <li><?php echo $_GET["EMAIL"]; ?></li>
        <li><?php echo $_GET["Alamat"]; ?></li>
        
    </ul>

    <a href= "latihan1.php">kembali ke halaman 1 </a>
    
</body>
</html>