<?php




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
        body{
            background: #4E535B;
            font-family:'Open Sans', Arial, sans-serif;
            font-size: 1em;
        }
        h2{
            text-align: center;
            color: #F1F2F4;
            text-shadow: 0 1px 0 #000;
        }
        a{
            text-decoration: none; color: #EC5C93;
        }
        .ribbon{
            background: rgba(200,200,200,.5);
            width: 50px;
            height: 70px;
            margin: 0 auto;
            position: relative;
            top: 19px;
            border: 1px solid rgba(255,255,255,.3);
            border-top: 2px solid rgba(255,255,255,.5);
            border-bottom: 0;
            border-radius: 5px 5px 0 0;
            box-shadow: 0 0 3px rgba(0,0,0,.7);
        }
        .ribbon:before{
            content:"";
            display: block;
            width: 15px;
            height: 15px;
            background: #4E535B;
            border: 4px solid #cfd0d1;
            margin: 18px auto;
            box-shadow: inset 0 0 5px #000, 0 0 2px #000, 0 1px 1px 1px #A7A8AB;
            border-radius: 100%;
        }
        .login{
            background: #F1F2F4;
            border-bottom: 2px solid #C5C5C8;
            border-radius: 5px;
            text-align: center;
            color: #36383C;
            text-shadow: 0 1px 0 #FFF;
            max-width: 300px;
            margin: 0 auto;
            padding: 15px 40px 20px 40px;
            box-shadow: 0 0 3px #000;
        }
        .login:before{
            content:"";
            display: block;
            width: 70px;
            height: 4px;
            background: #4E535B;
            border-radius: 5px;
            border-bottom: 1px solid #FFFFFF;
            border-top: 2px solid #CBCBCD;
            margin: 0 auto;
        }
        h1{
            font-size: 1.6em;
            margin-top: 30px;
            margin-bottom: 10px;
        }
        p{
            font-family:'Open Sans', Arial, sans-serif;
            font-weight: 300;
            color: #7B808A;
            margin-top: 0;
            margin-bottom: 30px;
        }
        .input{
            text-align: right;
            background: #E5E7E9;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: inset 0 0 3px #65686E;
            border-bottom: 1px solid #FFF;
        }
        input{
            width: 260px;
            background: transparent;
            border: 0;
            line-height: 3.6em;
            box-sizing: border-box;
            color: #71747A;
            font-family:'Open Sans', Arial, sans-serif;
            text-shadow: 0 1px 0 #FFF;
        }
        input:focus{
            outline: none;
        }
        .blockinput{
            border-bottom: 1px solid #BDBFC2;
            border-top: 1px solid #FFFFFF;
        }
        .blockinput:first-child{
            border-top: 0;
        }
        .blockinput:last-child{
            border-bottom: 0;
        }
        .blockinput i{
            padding-right: 10px;
            color: #B1B3B7;
            text-shadow: 0 1px 0 #FFF;
        }
        ::-webkit-input-placeholder {
            color: #71747A;
            font-family:'Open Sans', Arial, sans-serif;
            text-shadow: 0 1px 0 #FFF;
        }
        button{
            margin-top: 20px;
            display: block;
            width: 100%;
            line-height: 2em;
            background: rgba(114,212,202,1);
            border-radius: 5px;
            border:0;
            cursor: pointer;
            border-top: 1px solid #B2ECE6;
            box-shadow: 0 0 0 1px #46A294, 0 2px 2px #808389;
            color: #FFFFFF;
            font-size: 1.5em;
            text-shadow: 0 1px 2px #21756A;
        }
        button:hover{
            background: linear-gradient(to bottom, rgba(107,198,186,1) 0%,rgba(57,175,154,1) 100%);
        }
        button:active{
            box-shadow: inset 0 0 5px #000;
            background: linear-gradient(to bottom, rgba(57,175,154,1) 0%,rgba(107,198,186,1) 100%);
        }

    </style>
</head>
<body>
<body>
<div class="ribbon"></div>
<div class="login">
    <h1>Привет User </h1>
    <p>Придумай логин и пароль</p>
    <form method="post" action="DR22.01.2021.php">
        <div class="input">
            <div class="blockinput">
                <i class="icon-envelope-alt"></i><input type="text" name="log">
            </div>
            <div class="blockinput">
                <i class="icon-unlock"></i><input type="text" name="pas">
            </div>
        </div>
        <button>СОХРАНИТЬ</button>
    </form>
</div>
</body>


</html>
