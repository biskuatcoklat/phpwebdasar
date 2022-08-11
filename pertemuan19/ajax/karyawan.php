<?php
usleep(500000);
require_once "../function.php";
$keyword = $_GET["keyword"];
$query = "SELECT * FROM datakaryawan WHERE 
            nama LIKE '%$keyword%' OR 
            nik LIKE '%$keyword%' OR
            jabatan LIKE '%$keyword%' OR 
            email LIKE '%$keyword%' ";
$karyawan = query($query);
?>

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