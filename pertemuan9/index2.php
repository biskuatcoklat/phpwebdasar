<?php 
//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","karyawan");

//ambil data dari table karyawan / query
$result = mysqli_query($koneksi, "SELECT * FROM datakaryawan");

// ambil data(fetch) dari karyawan dari objek result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keudanya
// mysqli_fetch_object()

// while($kar = mysqli_fetch_assoc($result))
// {
//     var_dump($kar);
// }

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
    <h1>Daftar Mahasiswa</h1>
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
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["nik"]; ?></td>
            <td><?= $row["jabatan"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><img src="img/<?php echo $row["foto"]; ?>" width="50" alt=""></td>
            <td>
                <a href="">Edit ||</a>
                <a href="">Delete</a>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>
</html>