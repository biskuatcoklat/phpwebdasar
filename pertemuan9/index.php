<?php 
//koneksi ke database
require_once "function.php";
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
    <table border =" 1" cellpadding = "10" cellspacing = "0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nik</th>
            <th>Jabatan</th>
            <th>Email</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        <?php  $i =1; ?>
        <?php foreach($karyawan as $row) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["nik"]; ?></td>
            <td><?= $row["jabatan"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><img src="img/<?php echo $row["foto"]; ?>" width="200"></td>
            <td>
                <button for="edit" name="Edit" ><a href="">Edit</a></button>
                <button for="delete" name="delete"><a href="">Delete</a></button>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>