<?php

$nomor = [1,5,4,6,7,4];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
    <style>
        .kotak {
            width : 50px;
            height :50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    <?php for($i=0; $i<count($nomor); $i++ ) {?>
        <div class ="kotak"><?php echo $nomor[$i]; ?></div>
    <?php }?>
<div class ="clear"></div>

    <?php foreach ($nomor as $angka) { ?>
    <div class = "kotak"><?php echo $angka; ?></div> 
    <?php } ?>

    <div class= "clear"></div>
    
</body>
</html>