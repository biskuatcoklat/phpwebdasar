<?php
$koneksi = mysqli_connect("localhost", "root", "", "karyawan");
//cara sort bedasarkan ascending

// $karyawan = query("SELECT * FROM datakaryawan ORDER BY nik ASC");

// cara sort berdasarkan descending
$karyawan = query("SELECT * FROM datakaryawan ORDER BY id ASC");
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
    $foto = upload();

    if (!$foto) {
        return false;
    }


    $query = "INSERT INTO datakaryawan VALUES('','$nama','$nik','$jabatan','$email','$foto')";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

function upload()
{
    $namafoto = $_FILES['foto']['name'];
    $ukuranfoto = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $simpansementara = $_FILES['foto']['simpan_sementara'];

    //cek apakah tidak ada gambar yang di upload
    if ($error === 4) {
        echo "<script>
        alert('Please Choose your image');
        </script>";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $ekstensifotobenar = ['jpg', 'jpeg', 'png'];
    $ekstensinama = explode('.', $namafoto);
    $ekstensinama = strtolower(end($ekstensinama));

    if (!in_array($ekstensinama, $ekstensifotobenar)) {
        echo "<script>
        alert('This not support ekstensi');
        </script>";
        return false;
    }

    //cek ukuran file gambar
    if ($ukuranfoto > 5000000) {
        echo "<script>
        alert('Size image very big Maks 4 MB');
        </script>";
        return false;
    }

    //lolos pengecekan
    $namafotonew = uniqid();
    $namafotonew .= '.';
    $namafotonew .= $ekstensinama;

    move_uploaded_file($simpansementara, 'img/' . $namafotonew);
    return $namafoto;
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
    $fotolama = htmlspecialchars($data["fotolama"]);

    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['foto']['error'] === 4) {
        $foto = $fotolama;
    } else {
        $foto = upload();
    }



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

function registrasi($data)
{
    global $koneksi;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah terdaftar');</script>";

        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";

        return false;
    }
    //enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    mysqli_query($koneksi, "INSERT INTO user VALUES('', '$username' , '$password')");
    return mysqli_affected_rows($koneksi);
}
