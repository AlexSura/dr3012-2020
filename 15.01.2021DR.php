<?php
header('location: http://localhost:63342/php.ru/15.01.2021DRR.php');
$color=file( '15.01.2021DR.css');
print_r($color);
$f=$color[2];
$color1=explode(':', $f);
$c=$color1[1];
print_r($color1);
$d=substr($c,0,-3);
echo $d. "<br/>";
var_dump($d);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="box" style="background-color:<?echo $d;?>">
<p> что то </p>
</div>

</body>
</html>
