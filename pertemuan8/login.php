<?php
if(isset($_POST["submit"]))
{
    if($_POST["username"]=="wahyu" && $_POST["password"]=="123")
    {
        header(Location : admin.php);
        exit;
    }
    else{
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if(isset($error)) : ?>
        <p style="color : red">username / password salah</p>
        <?php endif ?>
<ul>
    <form action ="admin.php" method="post">
        <li>
            <label for ="username">Username</label>
            <input type ="text" name="username" id="username">

        </li>
        <li>
            <label for ="password">Password</label>
            <input type ="password" name="password" id="password">

        </li>
        <button for="submit" type="submit" name="submit">Login</button>
    </form>
</ul>
    
</body>
</html>