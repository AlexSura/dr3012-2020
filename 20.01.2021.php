<?php

// домашка от 18,01,21 выборка по онлайн тренажеру сколько осилить ( отправить ответы в текстовом запросе)
//очень долго грузит зрз
/*$hostname='localhost';
$username='sawo';
$password='1234';
$bdname='city_18.01.2021';
$conect=mysqli_connect($hostname, $username, $password, $bdname) or die ('УПС КАВА БАНГА');*/ //конект к БД/*
/*mysqli_set_charset( $conect, 'utf-8');*///шифр
/*$sql= mysqli_query($conect,"INSERT INTO nname VALUES (1,9,'MrSmit',22)");*/
/*$sql2=mysqli_query($conect, "SELECT * FROM nname");*///вывод БД
/*$arra=mysqli_fetch_all($sql2,MYSQLI_ASSOC);*///последне MYSQLI_ASSOC преобразовывает ассоциативный массив
/*echo "<pre>";*/
/*print_r($arra);*/
/*echo "<pre>";
foreach ($arra as $product){
echo "name= ". $product['name']."=". $product['Age']. "<br/>";
}*/

/*$sqq = mysqli_query($conect, "CREATE DATABASE $bdname");*/
// это штука создает базу данных новую
/*mysqli_select_db($conect, $bdname);*/
/*$SS = mysqli_query($conect, "CREATE TABLE people (
ID_person INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
NAME VARCHAR(20) NOT NULL,
SURNAME VARCHAR(30) NOT NULL,
AGE INT(6)
)");*/
//это штука создает таблицу в выбранной базе данных тут она PEOPLE
$hostname = 'localhost';
$username = 'sawo';
$password = '1234';
$bdname = 'people1';
$conect = mysqli_connect($hostname, $username, $password, $bdname) or die ('УПС КАВА БАНГА');
$Aar=mysqli_query($conect, "SELECT * FROM people");
$arr=mysqli_fetch_all($Aar,MYSQLI_ASSOC);
mysqli_select_db($conect, $bdname);
$hobbies = mysqli_query($conect, "CREATE TABLE hobbies (
ID_hobbies INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
NAME VARCHAR(20) NOT NULL,
DESCRIPTION VARCHAR(30) NOT NULL,
)");
mysqli_query($conect,"INSER INTI 'hobbies' ('ID_hobbies','NAME', 'DESCRIPTION') VALUES ('1' , 'snowboard', 'например что то на русском про фрирайд')
");
$hobbies_people=mysqli_query($conect, "CREATE TABLE hobbies_people (
ID_rec INT(5) UNSIGNET AUTO_INCREMENT PRIMARY KEY,
ID_hobbies INT(5) NOT NULL,
ID_person INT(5) NOT NULL,
)");
mysqli_query($conect, "ALTER TABLE `hobbies_people` ADD FOREIGN KEY (`ID_person`) REFERENCES `people`(`ID_person`) ON DELETE RESTRICT ON UPDATE RESTRICT;");
mysqli_query($conect, "ALTER TABLE `hobbies_people` ADD FOREIGN KEY (`ID_hobbies`) REFERENCES `hobbies`(`ID_hobbies`) ON DELETE RESTRICT ON UPDATE RESTRICT;");
//?>

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
<form action="connectPeople1.php" method="post">
    <p>id_name</p>
    <input type="text" name="id_name">
    <p> Name </p>
    <input  type="text" name="name"></input>
    <p>Surname</p>
    <input type="text" name="surname">
    <p>Age</p>
    <input type="number" name="age">
    <input type="submit">new people
    <p>попытка добавлять через форму не вышло как и через php использовал mysqli_query($conect, "INSERT INTO `people` (`ID_person`, `NAME`, `SURNAME`, `AGE`) VALUES ('$id_name', '$name', '$surname', '$age')
        ");
    </p>
    <div>
        <p><pre>
            <?
            print_r($arr);
            ?>
            </pre>
        </p>
    </div>
</form>
</body>
</html>

