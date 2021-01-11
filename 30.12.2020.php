<?php
echo "Hello World!";
echo "<br/>";
function srv($a,$b){
    if ($a>$b){
        echo "$a";
        echo "<br/>";
    }
    elseif ($b>$a){
        echo "$b";
        echo "<br/>";
    }
}
srv(16,12);
srv(220,330);
echo "<br/>";
function gip($a,$b){
    $g=(($a*$a)+($b*$b));
    $g=sqrt($g);
    echo "Гипотенуза "."$g";
    echo "<br/>";
}
gip(4,5);
//4 задание
function massiv(){
    $i=rand(1,15);
    $i=(int)$i;
    $mass=array();
    $mass=range(0,5000000);
   $masz=array_rand($mass,$i);
    print_r($masz);
}
echo"функуия создающий массив  ";
massiv();






echo "<br/>";
// задание 5
//Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива.
function sred($mas=array()){
 /*   $maz=range(0,5000);
    $mas=array_rand($maz,4);*/
    $s=count($mas);
    $sum=array_sum($mas);
    $result=$sum/$s;
    echo "среднеарифметическое значение  ". $result;
    echo "<br/>";
}
$x=array(5,9,10,105,6,60);
sred($x);
//Создать функцию, которая принимает строку. Вернуть количество слов с строке.
function count_str($r){
    $ST=explode(' ',$r);
    $result=count($ST);
    echo "количество слов с строке  ". $result;
}

$String="Создать функцию, которая принимает среднеарифметическое значение массива.";
count_str($String);
echo "<br/>";
$Qq="Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива.";
echo "<br/>";
count_str($Qq);
//*Написать функцию, которая рассчитывает последовательность чисел Фибоначчи.Fn = Fn-1 + Fn-2
function Fibi($i){
    if ($i==0) return 0;
    if ($i==1 || $i==2) {
        return 1;
    }else {
        return Fibi($i-1)+ Fibi($i-2);
    }

}
echo "<br/>";
echo "Fn = Fn-1 + Fn-2". Fibi(19). " //Эта штука не работает с отрицательными числами";

echo "<br/>";
//Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.
echo "<strong>ДОМАШНЯЯ РАБОТАТА<strong/>";
echo "<br/>";
echo "<br/>";
echo " Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.";
echo "<br/>";
function dr_1($mass=array()){
        $dr=count($mass);
        $mass=range(0,5000000);
        $masz=array_rand($mass,$dr);
        print_r($masz);
}
$t=array(0,1,1,1,1,1,1,1);
dr_1($t);
echo "<br/>";
dr_1($b=array(1,2,2,2,2,5,4));
echo "<br/>";
echo "ДР задание 1 ". dr_1($v=array(0,1,2,3,4,5,6,7,8,9,10,11,11,1,11,1,1,1,1,));
echo "<br/>";
echo "Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая посчитает количество слов строке.";
echo "<br/>";
function dr_2($str){

    $sTr=explode(' ',$str);
    $resul=count($sTr);

    echo "$resul";
}
$rr="Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая посчитает количество слов строке.";
dr_2($rr);
echo "<br/>";
//Дана строка «HTML, CSS, PHP, BITRIX».
// Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).
$z="HTML, CSS, PHP, BITRIX";
function dr_3($string)
{
    $strrev = "";
    for($i = mb_strlen($string); $i >= 0; $i--) {
        $strrev .= mb_substr($string, $i, 1);
    }
    return $strrev;
}
echo "Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »)". dr_3($z);
//Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет на экран длину строки.
$Ss="HTML, CSS, PHP, BITRIX";
function dr_4($stri){
    $i = mb_strlen($stri);
    echo $i;
}
echo "<br/>";
echo "длину строки  ". dr_4($Ss);
echo "<br/>";

//Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет каждую букву на новую строку

$g="HTTTML, CSS, PHP, BITRIX";
function dr_5($strri){
$strr ="$strri";
$resul=wordwrap ($strr,1,"<br/>",true);
   echo $resul;
}
dr_5($g);
?>