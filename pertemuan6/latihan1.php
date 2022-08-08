<?php
// $mhs = [["sakti","21134321","jarigan","wahyu@gmail.com"],
// ["wahyu Aprilliandhika","21.11.3869", "informatika", "sakti@gmail.com"]];

$mhs = [
    ["nama" => "wahyu",
        "nim" =>"21.11.3869",
        "email" => "@gmail.com",
        "jurusan" => "informatika",
        "gambar" => "mouse.jpeg"
    ],
    [
        "nama" => "sakti",
        "nim" => "21.11.3869",
        "email" => "sakti@gmail.com",
        "jurusan" => "informatika",
        "gambar" => "network.jpg"
    ]
    ];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mhs as $m) 
    {
        ?>
        <ul>
            <li>Nama : <?php echo $m["nama"];?></li>
            <li>Nim : <?php echo $m["nim"];?></li>
            <li>Jurusan : <?php echo $m["jurusan"];?></li>
            <li>email : <?php echo $m["email"];?></li>
            <li>gambar :<img src=  <?php echo $m["gambar"];?>></li>
        </ul>
   <?php } ?>
</body>
</html>
