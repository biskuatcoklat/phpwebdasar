<?php

$karyawan = 
[
    [
        "nama" => "Wahyu Aprilliandhika",
        "NIK" => "21.11.3869",
        "JABATAN" => "SOFTWARE ENGINENER",
        "EMAIL" => "wahyuaprilliandhika@gmail.com",
        "Alamat" => "Jalan Pasar 1 Tj.Sari Gg.Rezeki No 74"
    ],
    [
        "nama" => "Sakti Adnan Magani",
        "NIK" => "21.11.3888",
        "JABATAN" => "NETWORKING",
        "EMAIL" => "SAKTI@gmail.com",
        "Alamat" => "Jalan Pasar 1 Tj.Sari Gg.Rezeki No 74"
    ],
    [
        "nama" => "Zaki Fadhil Alfarizil",
        "NIK" => "21.11.3866",
        "JABATAN" => "UI/UX",
        "EMAIL" => "ZAKI@gmail.com",
        "Alamat" => "Jalan Pasar 1 Tj.Sari Gg.Rezeki No 74"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard</title>
</head>
<body>
    <h1>Data karyawan</h1>
<ul>
    <?php foreach($karyawan as $pegawai) : ?>
        
        <li>
            <a href = "latihan2.php?nama=<?php echo $pegawai["nama"]; ?>&NIK=<?php echo $pegawai["NIK"]; ?>&JABATAN=<?php echo $pegawai["JABATAN"]; ?>&EMAIL=<?php echo $pegawai["EMAIL"]; ?>&Alamat=<?php echo $pegawai["Alamat"]; ?>"><?php echo $pegawai["nama"]; ?>
        </li>
    <?php endforeach ?>
</ul>
</body>
</html>