<?php
require_once "function.php";

// cek apakah tombol submit sudah ditekan atau belum

if (isset($_POST["submit"])) {
    //cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "<script>alert('data berhasil ditambahkan');
        document.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('data gagal ditambahkan');
        document.location.href = 'index.php';</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>

<body>
    <h1>Add Data Karyawan</h1>
    <br>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama" name="nama">Nama</label>
                <input type="text" name="nama" id="nama" required></input>
            </li><br>
            <li>
                <label for="nik" name="nik">Nik</label>
                <input type="text" name="nik" id="nik" required></input>
            </li><br>
            <li>
                <label for="jabatan" name="jabatan">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" required></input>
            </li><br>
            <li>
                <label for="email" name="email">Email</label>
                <input type="email" name="email" id="email" required></input>
            </li><br>
            <li>
                <label for="foto" name="foto">Foto</label>
                <input type="text" name="foto" id="foto" required></input>
            </li><br>
            <li>
                <button type="submit" name="submit">Submit</button>
            </li><br>
        </ul>

    </form>

    <a href="index.php"><button>back</button></a>

</body>

</html>