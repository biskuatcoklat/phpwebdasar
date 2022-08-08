<?php
session_start();

if (isset($_SESSION["login"])) {
    header("location: index.php");
    exit;
}
require_once "function.php";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

    //cek username
    if (mysqli_num_rows($result) === 1) {
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            //set session
            $_SESSION["login"] = true;
            header("location: index.php");
            exit;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <h1>Login</h1>

    <?php
    if (isset($error)) : ?>
        <p style="color: red ;font-style: italic;">Username / Password Salah</p>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li><br>
            <li>
                <button type="submit" name="login">login</button>
            </li>

        </ul>
    </form>
    <p>Belum punya akun daftar terlebih dahulu</p>
    <a href="registrasi.php"><button>Sign Up</button></a>
</body>

</html>