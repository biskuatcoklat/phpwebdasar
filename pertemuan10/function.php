<?php
$koneksi = mysqli_connect("localhost", "root", "", "karyawan");
$karyawan = query("SELECT * FROM datakaryawan");
function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function  tambah($data)
{
    global $koneksi;
    $nama = htmlspecialchars($data["nama"]);
    $nik = htmlspecialchars($data["nik"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $email = htmlspecialchars($data["email"]);
    $foto = htmlspecialchars($data["foto"]);

    $query = "INSERT INTO datakaryawan VALUES('','$nama','$nik','$jabatan','$email','$foto')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function delete($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM datakaryawan WHERE id = $id");
    return  mysqli_affected_rows($koneksi);
}

function edit()
{
    global $koneksi;
}
