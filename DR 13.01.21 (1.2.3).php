<?php
//Удалить сессию при помощи специальной функции
session_start();

//session_destroy();



// К задаче с авторизацией добавить две страницы (fact.php, bitrix.php).
// Необходимо запоминать последнюю посещенную страницу (либо fact.php, либо bitrix.php).
// После авторизации пользователя,
//\ необходимо вывести на экран, какая страница была посещена последней.
/*print_r($_POST);*/

if (($_SESSION['GO']>0)){
    echo $_POST['login']. ' посещал последнию страницу  ' . $_SESSION['sait']."<br/>";
}
/*if ($_SESSION['GO']=1){

}*/
/*print_r($_SESSION);*/
//Создайте список с выпадающим цветом. Задний фон сайта должен окрашиваться в выбранный цвет из списка.
// Если пользователе
// покинет сайт и заново войдет, нужно окрасить сайт в тот цвет, который был выбран последним.
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


        #blok_1{
            height:120px;
            width:300px;
        }
    </style>

</head>
<body >
<form method="post">
    <input type="text" name="login">логин
    <input type="text" name="password">пароль
    <input type="submit" value="Авторизоваться">

    <?
    if(isset($_POST['login']) and isset($_POST['password']) ){
        if($_POST['login']=='Alex'){
            if ($_POST['password']=='werty'){
                $_SESSION['GO']=1;
                echo 'доступ разрешон'."<br/>"."<a href=fact.php target=_blank> fact</a><br/><a href=bitrix.php target=_blank>bitrix</a>";

        } else {echo 'доступ запрещен'."<br/>";
                $_SESSION['GO']=0;}

        }
    }
    print_r($_GET);
    print_r($_SESSION);
    if (!isset($_GET['Color'])){

    }else{
        $_SESSION['Color']=$_GET['Color'];
    }

$a=$_SESSION['Color'];
    echo $a;

    ?>

</form>
<form>
    <select name="Color">
        <option style="background-color: #FF0000" value="#FF0000"></option>
        <option style="background-color: #FFFF00" value="#FFFF00"></option>
        <option style="background-color: #000000" value="#000000"></option>
        <option style="background-color: #008000" value="#008000"></option>

    </select>
    <input type="submit" value="задать цвет">
</form>

<br>
<div id="blok_1" style="background-color:<?php echo $a; ?>;"></div>

</body>
</html>
