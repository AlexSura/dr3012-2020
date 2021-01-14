<?php
session_start();
if (!isset($_SESSION['sait'])){
    /*echo "СЧетчик перезагрузок пуст";*/
    $_SESSION['sait']='bitrix.pph';
}
else{
    $_SESSION['sait']='bitrix.php';
    /*echo "количество перезагрузок". $_SESSION['sait'] . "раз";*/
}
if (!isset($_SESSION['delet'])){
    $_SESSION['delet']=0;
}
elseif(isset($_SESSION['delet'])){
    $_SESSION['delet']++;
    echo $_SESSION['delet'];
}
elseif ($_SESSION['delet']==15){
    session_destroy();
}
print_r($_SESSION);
