<?php
$mhs = [["sakti","21134321","jarigan","wahyu@gmail.com"],
["wahyu Aprilliandhika","21.11.3869", "informatika", "sakti@gmail.com"]];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    
    
        <?php foreach($mhs as $mahasiswa) {?>
            <ul>
                <li>Nama : <?php echo $mahasiswa[0]; ?></li>
                <li>Nim : <?php echo $mahasiswa[1]; ?></li>
                <li>jurusan : <?php echo $mahasiswa[2]; ?></li>
                <li>email : <?php echo $mahasiswa[3]; ?></li>
            </ul>
        <?php } ?>
    
</body>
</html>