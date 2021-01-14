<?php
session_start();
if (!isset($_SESSION['sait'])){
    /*echo "СЧетчик перезагрузок пуст";*/
    $_SESSION['sait']='fact.php';
}
else{
    $_SESSION['sait']='fact.php';
   /* echo "количество перезагрузок ". $_SESSION['fact'] . "раз";*/
}