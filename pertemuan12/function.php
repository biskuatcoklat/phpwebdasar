<?php
$koneksi = mysqli_connect("localhost", "root", "", "karyawan");
//cara sort bedasarkan ascending

// $karyawan = query("SELECT * FROM datakaryawan ORDER BY nik ASC");

// cara sort berdasarkan descending
$karyawan = query("SELECT * FROM datakaryawan ORDER BY nik DESC");
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

function edit($data)
{
    global $koneksi;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nik = htmlspecialchars($data["nik"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $email = htmlspecialchars($data["email"]);
    $foto = htmlspecialchars($data["foto"]);

    $query = "UPDATE datakaryawan SET nama = '$nama',
                                        nik ='$nik',
                                        jabatan = '$jabatan',
                                        email = '$email',
                                        foto= '$foto'
                                        WHERE id = $id
                                        ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function search($keyword)
{

    $query = "SELECT * FROM datakaryawan WHERE 
    nama LIKE '%$keyword%' OR 
    nik LIKE '%$keyword%' OR
    jabatan LIKE '%$keyword%' OR 
    email LIKE '%$keyword%'
    ";

    return query($query);
}
