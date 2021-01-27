<?php
require_once ('DOMr25.01.2021.php');
print_r($_SESSION);
print_r($_GET);
$g=$_GET['BD'];
$g=new Authoris_sess();
$g->BD();
if ($auth->maybe()) {
    echo "Hello, "."<a href='https://fact.digital/'>FACT</a>"  ;
    echo "<br/><br/><a href=\"?exit=1\">Exit</a>";
}
else {
    ?>
    <form method="post">
        <input type="text" name="l" placeholder="Enter your login" style="color: rgb(51,255,51)"/><br/>
        <br/>
        <input type="password" name="p" placeholder="Enter your password" style="color: rgb(51,255,51)"/><br/>
        <br/>
        <input type="submit" value="Enter" />
    </form>
    <form>
    <br>
        <input type="text" name="name"> введите имя
    </br>
        <input type="text" name="surname"> введите фамилию
    </br>
        <input type="text" name="age"> введите возраст
    </br>
        <input type="text" name="login"> придумайте логин
    </br>
        <input type="password" name="password"> придумайте пароль
    </br>
        <input type="submit" name="BD" value="сохранить" checked="BD">
    </form>
    <?php

} ?>
