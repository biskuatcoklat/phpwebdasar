
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
<?php
date_default_timezone_set("Asia/jakarta");

$nama ="admin";

//ambil jam dan menit
$jam = date('H:i');

//atur salam menggunakan IF
if ($jam > '05:30' && $jam < '11:00')
{
    $salam = 'Pagi' ;
} 
elseif ($jam >= '11:00' && $jam < '15:00') 
{
    $salam = 'Siang' ;
} 
elseif ($jam < '18:00') 
{
    $salam = 'Sore' ;
} 
else 
{
    $salam = 'Malam';
}

//tampilkan pesan


?>
<h1><?php echo "Selamat  $salam $nama " ;?></h1>
    
    
</body>
</html>