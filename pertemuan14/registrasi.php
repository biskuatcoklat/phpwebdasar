<?php
require_once "function.php";

if (isset($_POST['registrasi'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('Registration Success');
        </script>";
    } else {
        echo mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <h1>Sign Up</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" autocomplete="off">

            </li>
            <li>

                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="off">

            </li>
            <li>

                <label for="password2">Confirm Password</label>
                <input type="password" name="password2" id="passsword2" autocomplete="off">


            </li>
            <li>
                <button type="submit" name="registrasi">Sign Up</button>
            </li>
        </ul>
    </form>
</body>

</html>