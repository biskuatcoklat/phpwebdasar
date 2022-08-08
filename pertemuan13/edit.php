<?php
require_once "function.php";

//ambil data di url

$id = $_GET["id"];
//query data mahasiswa berdasarkan id

$karyawan = query("SELECT * FROM datakaryawan WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    //cek apakah data berhasil di ubah atau tidak
    if (edit($_POST) > 0) {
        echo "<script>alert('data berhasil diedit');
        document.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('data gagal diedit');
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
    <title>Edit Data</title>
</head>

<body>
    <h1>Edit Data Karyawan</h1>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $karyawan["id"]; ?>">
        <input type="hidden" name="fotolama" value="<?php echo $karyawan["foto"]; ?>">
        <ul>
            <li>
                <label for="nama" name="nama">Nama</label>
                <input type="text" name="nama" id="nama" required value="<?= $karyawan["nama"]; ?>"></input>
            </li><br>
            <li>
                <label for="nik" name="nik">Nik</label>
                <input type="text" name="nik" id="nik" required value="<?= $karyawan["nik"]; ?>"></input>
            </li><br>
            <li>
                <label for="jabatan" name="jabatan">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" required value="<?= $karyawan["jabatan"]; ?>"></input>
            </li><br>
            <li>
                <label for="email" name="email">Email</label>
                <input type="email" name="email" id="email" required value="<?= $karyawan["email"]; ?>"></input>
            </li><br>
            <li>
                <label for="foto" name="foto">Foto</label>
                <img src="img/<?php echo $karyawan['foto'] ?>" width="100px">
                <input type="file" name="foto" id="foto"></input>
            </li><br>
            <li>
                <button type="submit" name="submit">Edit </button>
            </li><br>
        </ul>

    </form>

    <a href="index.php"><button>back</button></a>

</body>

</html>