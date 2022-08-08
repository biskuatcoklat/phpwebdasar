<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}
//koneksi ke database
require_once "function.php";


//pagination
//konfigurasi
$jumlahdataperhalaman = 3;
$jumlahdata = count(query("SELECT * FROM datakaryawan"));
$jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman);
//ternary operator
$halamanaktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awaldata = ($jumlahdataperhalaman * $halamanaktif) - $jumlahdataperhalaman;






$karyawan = query("SELECT * FROM datakaryawan LIMIT $awaldata ,$jumlahdataperhalaman");

if (isset($_POST["cari"])) {
    $karyawan = search($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Karyawan</h1>
    <br>
    <a href="tambahdata.php"><button for="tambah" name="tambah">Add Data</button></a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="30" autofocus placeholder="searching your data" autocomplete="off"></input>
        <button type="submit" name="cari">Search</button>
    </form><br>

    <?php for ($i = 1; $i <= $jumlahhalaman; $i++) : ?>
        <?php if ($i == $halamanaktif) : ?>

            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color:blue"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <br>

    <table border=" 1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nik</th>
            <th>Jabatan</th>
            <th>Email</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($karyawan as $row) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["nik"]; ?></td>
                <td><?= $row["jabatan"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><img src="img/<?php echo $row["foto"]; ?>" width="100"></td>
                <td>
                    <button for="edit" name="Edit"><a href="edit.php?id=<?= $row["id"]; ?>">Edit</a></button>
                    <button for="delete" name="delete"><a href="delete.php?id=<?= $row["id"]; ?> " onclick=" return confirm ('Do You Want to delete data?');">Delete</a></button>
                </td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
    <br>


    <br>
    <a href="logout.php"><button>Logout</button></a>
</body>

</html>