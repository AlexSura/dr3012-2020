<?php
print_r($_GET);
/*print_r($_POST);*/
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
<form method="get">
    <p>
        <select name="L">
            <option value="1">lab1</option>
            <option value="2">lab2</option>
            <option value="3">lab3</option>
            <option value="4">lab4</option>
        </select>
    </p>
    <p>
        <input type="submit">
    </p>
</form>
<form method="post">
    <input type="text" name="log"> login
    <textarea name="com"></textarea>
    <input type="submit">птщ
</form>
<form>
    <h1>AHKETA</h1>
    <h2> Считаете ли Вы, что у многих ваших знакомых хороший характер? <h2/>
        <p>
        <input type="radio" value="0" checked name="1">да
        </p>
        <p>
        <input type="radio" value="1" name="1">нет
        <p/>
    <h2>Раздражают ли Вас мелкие повседневные обязанности?<h2/>
        <p>
            <input type="radio" value="0" checked name="2">да
        </p>
        <p>
            <input type="radio" value="1" name="2">нет
        <p/>
     <h2>Верите ли Вы, что ваши друзья преданы Вам? <h2/>
             <p>
                 <input type="radio" value="1" checked name="3">да
             </p>
             <p>
                 <input type="radio" value="0" name="3">нет
             <p/>
         <h2>Неприятно ли Вам, когда незнакомый человек делает Вам замечание?  <h2/>
             <p>
                 <input type="radio" value="0" checked name="4">да
             </p>
             <p>
                 <input type="radio" value="1" name="4">нет
             <p/>
             <h2>Способны ли Вы ударить собаку или кошку?  <h2/>
                 <p>
                     <input type="radio" value="0" checked name="5">да
                 </p>
                 <p>
                     <input type="radio" value="1" name="5">нет
                 <p/>
                 <h2>Часто ли Вы принимаете лекарства?  <h2/>
                     <p>
                         <input type="radio" value="0" checked name="6">да
                     </p>
                     <p>
                         <input type="radio" value="1" name="6">нет
                     <p/>
                     <h2>Часто ли Вы меняете магазин, в который ходите за продуктами?  <h2/>
                         <p>
                             <input type="radio" value="0" checked name="7">да
                         </p>
                         <p>
                             <input type="radio" value="1" name="7">нет
                         <p/>
                         <h2>Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?  <h2/>
                             <p>
                                 <input type="radio" value="0" checked name="8">да
                             </p>
                             <p>
                                 <input type="radio" value="1" name="8">нет
                             <p/>
                             <h2>Тяготят ли Вас общественные обязанности? <h2/>
                                 <p>
                                     <input type="radio" value="1" checked name="9">да
                                 </p>
                                 <p>
                                     <input type="radio" value="0" name="9">нет
                                 <p/>
                                 <h2>Способны ли Вы ждать более 5 минут, не проявляя беспокойства?  <h2/>
                                     <p>
                                         <input type="radio" value="1" checked name="10">да
                                     </p>
                                     <p>
                                         <input type="radio" value="0" name="10">нет
                                     <p/>
                                     <h2>Часто ли Вам приходят в голову мысли о Вашей невезучести? <h2/>
                                         <p>
                                             <input type="radio" value="0" checked name="11">да
                                         </p>
                                         <p>
                                             <input type="radio" value="1" name="11">нет
                                         <p/>
                                         <h2>Сохранилась ли у Вас фигура по сравнению с прошлым? <h2/>
                                             <p>
                                                 <input type="radio" value="0" checked name="12">да
                                             </p>
                                             <p>
                                                 <input type="radio" value="1" name="12">нет
                                             <p/>
                                             <h2>Можете ли Вы с улыбкой воспринимать подтрунивание друзей? <h2/>
                                                 <p>
                                                     <input type="radio" value="1" checked name="13">да
                                                 </p>
                                                 <p>
                                                     <input type="radio" value="0" name="13">нет
                                                 <p/>
                                                 <h2>Нравится ли Вам семейная жизнь?  <h2/>
                                                     <p>
                                                         <input type="radio" value="1" checked name="14">да
                                                     </p>
                                                     <p>
                                                         <input type="radio" value="0" name="14">нет
                                                     <p/>
<h2>Злопамятны ли Вы?<h2/>
    <p>
        <input type="radio" value="0" checked name="15">да
    </p>
    <p>
        <input type="radio" value="1" name="15">нет
    <p/>
    <h2>Находите ли Вы, что стоит погода, типичная для данного времени года?<h2/>
        <p>
            <input type="radio" value="0" checked name="16">да
        </p>
        <p>
            <input type="radio" value="1" name="16">нет
        <p/>
<h2>Случается ли Вам с утра быть в плохом настроении?<h2/>
    <p>
        <input type="radio" value="0" checked name="17">да
    </p>
    <p>
        <input type="radio" value="1" name="17">нет
    <p/>
<h2>Раздражает ли Вас современная живопись?<h2/>
    <p>
        <input type="radio" value="0" checked name="18">да
    </p>
    <p>
        <input type="radio" value="1" name="18">нет
    <p/>
<h2>Надоедает ли Вам присутствие чужих детей в доме более одного часа?<h2/>
    <p>
        <input type="radio" value="1" checked name="19">да
    </p>
    <p>
        <input type="radio" value="0" name="19">нет
    <p/>
<p>
    <input type="submit" name="cnop">
    <p/>
    <!--//Напишите сценарий обработки анкеты: поставьте 1 балл, если был ответ «да» в вопросах с номерами 3, 9,
    //10, 13, 14,
    //19 и «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18.
    //Посчитайте сумму набранных баллов:-->

</form>

</body>
</html>
<?php
if (isset($_GET)){
    if(!empty($_GET['cnop'])){
        $a=$_GET;
        $b=array_sum($a);
        /*echo 'сумма балов '. array_sum($a);*/
        } if ($b>=15){
        echo "У Вас покладистый характер";
    }if ($b<=15){
        echo "Вы не лишены недостатков, но с вами можно ладить";
    }if ($b<8){
        echo "Вашим друзьям можно посочувствовать";
    }

    }


?>

<?php
$to='yellowjazz@mail.ru';


$login=$_POST['log'];
$coment=$_POST['com'];
$login=htmlspecialchars($login);
$coment=htmlspecialchars($coment);
$login=urldecode($login);
$coment=urldecode($coment);
$login=trim($login);
$coment=trim($coment);
$header=array(
    'From' => 'yellowjazz@m.ru',
    'Reply-To' => 'yellowjazz@m.ru',
);
Echo $coment.'<br/>'  . $login;
if (isset($_POST['log'])and (isset($_POST['com']))){
    if(!empty($_POST['log'])and (!empty($_POST['com']))){
        mail($to,$login,$coment,$header);
}
    }

