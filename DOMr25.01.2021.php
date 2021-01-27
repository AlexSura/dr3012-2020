<?php

header('Content-Type: text/html; charset=utf-8');
session_start();

class Authoris_sess {
    private $_lg = "user";
    private $_pass = "php";
    public function BD()
    {
        if(isset ($_GET['BD'])){
            $hostname='localhost';
            $username='sawo';// ваш логин myadmin
            $password='1234';// ва пароль от myadmin
            $bdname='USER';// имя создаваемой БД
            $conn=mysqli_connect($hostname, $username, $password);
            $new_BD = mysqli_query($conn, "CREATE DATABASE $bdname");
            $connect=mysqli_connect($hostname, $username, $password,$bdname);
            mysqli_select_db($connect,$bdname);
            mysqli_query($connect,"CREATE TABLE USER (
id_person INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
LOGIN VARCHAR(20) NOT NULL,
PASSWORD VARCHAR(30) NOT NULL,
NAME VARCHAR(20) NOT NULL,
SURNAME VARCHAR(25) NOT NULL,
AGE INT(5) NOT NULL
)");
            $newlog=$_GET['login'];
            $newpas=$_GET['password'];
            $newname=$_GET['name'];
            $newsurname=$_GET['surname'];
            $newage=$_GET['age'];
            $log_pas="INSERT INTO USER (`id_person`, `LOGIN`, `PASSWORD`,`NAME` ,SURNAME,AGE ) VALUES ('NULL' , '$newlog', '$newpas',$newname,$newsurname,$newage)";
            mysqli_query($connect,$log_pas);
        }
    }
    public function maybe() {
        if (isset($_SESSION["authoris"])) {
            return $_SESSION["authoris"];
        }
        else return false;
    }

    public function auth($lg, $pass) {
        if ($lg == $this->_lg && $pass == $this->_pass) {
            $_SESSION["authoris"] = true;
            $_SESSION["l"] = $lg;
            $u_r='https://fact.digital/';
            header('Location'.$u_r);
            return true;
        }
        else {
            $_SESSION["authoris"] = false;
            return false;
        }
    }





    public function vihod() {
        $_SESSION = array();
        session_destroy();
    }
}

$auth = new Authoris_sess();

if (isset($_POST["l"]) && isset($_POST["p"])) {

    if (!$auth->auth($_POST["l"], $_POST["p"])) {
        echo "<p style=\"color:red;\">Неправильный пароль или логин!</p>";
    }
}

if (isset($_GET["exit"])) {
    if ($_GET["exit"] == 1) {
        $auth->vihod();

        header("Location: ?exit=0");// вопрос для повторения
    }
}
