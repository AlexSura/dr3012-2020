<?php
$hostname='localhost';
$username='sawo';// ваш логин myadmin
$password='1234';// ва пароль от myadmin
$bdname='logpas';// имя создаваемой БД
/*$conect=mysqli_connect($hostname, $username, $password) or die ('УПС КАВА БАНГА');
// создаем бд
$new_BD = mysqli_query($conect, "CREATE DATABASE $bdname");
mysqli_select_db($bdname,$conect);*/
// создаем таблицу
$conn=mysqli_connect($hostname, $username, $password,$bdname);
if (!$conn) {
    die("Подключение не удалось: " . mysqli_connect_error());
}
$table=mysqli_query($conn,"CREATE TABLE login_password (
id_person INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
LOGIN VARCHAR(20) NOT NULL,
PASSWORD VARCHAR(30) NOT NULL
)");
// значения значения в теории пришедшие с стр с лог и паролем
$newlog=$_POST['log'];
$newpas=$_POST['pas'];

$log_pas="INSERT INTO login_password (`id_person`, `LOGIN`, `PASSWORD`) VALUES ('null' , '$newlog', '$newpas')";
mysqli_query($conn,$log_pas);
echo $newpas, $newlog;
mysqli_set_charset( $conn, 'utf-8');

$resul1=mysqli_query($conn, "SELECT LOGIN, PASSWORD FROM login_password ");
echo "<br/>";
$arrr=mysqli_fetch_all($resul1,MYSQLI_ASSOC);
echo "<pre>";
foreach ($arrr as $product){
    echo  $product['LOGIN']."=". $product['PASSWORD']. "<br/>";
}
if(!empty($_REQUEST['password']) and !empty($_REQUEST['login'])){
    $login=$_REQUEST['login'];
    $passwo=$_REQUEST['password'];
    $query='SELECT * FROM login_password WHERE LOGIN="'.$login.'" AND PASSWORD="'.$passwo.'"';
    $conn=mysqli_connect($hostname, $username, $password,$bdname);
    $prim= mysqli_query($conn,$query);
    $user=mysqli_fetch_assoc($prim);
    if(!empty($user)){
        echo"<img src='https://kartinkinaden.ru/uploads/posts/2020-07/1595725440_21-p-fon-pastel-21.jpg'>";
    }else{
        echo "пользователь не прошел авторизацию";
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .blok-auto{
            width: 600px;
            height: 600px;
            background-image: url("https://kartinkinaden.ru/uploads/posts/2020-07/1595725440_21-p-fon-pastel-21.jpg");
        }
        .blok-center {
            position: absolute;
            width: 600px;
            height: 400px;
            margin: auto;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: #7B808A;
            border: 1px solid #000;
            padding: 10px;
            overflow: auto;
    </style>
</head>
<body>

<div class="blok-center">
<form method="post">
    <p>повторите ввод придуманного логина<br/>
    <input type="text" name="login" style="width: 60%">
    <p> повторите ввод придуманного пароля<br/>
    <input type="password" name="password" style="width: 60%">
        <br/>
        <pre/>
    <input type="submit" value="войти" style="width: 60%">
</div>
</body>
<!--<form method="post">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit" value="Авторизоваться">
</form>
</body>-->
</html>
