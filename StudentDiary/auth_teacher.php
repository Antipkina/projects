<?php
session_start();
include_once('db.php');



$login = '';
$errors ='';

if(isset($_POST['sub']))
{

    $login = htmlspecialchars($_POST['login']);
    $pass = htmlspecialchars($_POST['pass']);

    db :: getInstance();

    if(empty($login))
        $errors .= "Логин не может быть пустым <br />";

    if(empty($pass))
        $errors .= "Пароль не может быть пустым <br />";


    if(empty($errors))
    {
        $sql = "SELECT * FROM teacher  WHERE login ='$login' and password = MD5('$pass')";
        if(!$sql)
            $errors .="Не найдены данные";

        $result = db :: query($sql);

        if($result && (($row = mysql_fetch_array(db::query($sql)))!= false))
        {
            $_SESSION['index2'] = $row['login'];
            header('location: http://localhost/enter1.php');
        }
        else
            $errors .= "Неверный логин или пароль!<br />";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <!-- META -->
    <meta charset = "utf-8">
    <meta http-equiv="content-language" content="ru">
    <meta name = "keywords" content = "Хамам под ключ">
    <meta name="description" content="Строительство хаммама под ключ. Выбор оборудования и дизайн">
    <meta name = "viewport" content = "width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name = "apple-mobile-web-app-capable" content = "yes" />

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/def.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
        <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/mobilyslider.js" type="text/javascript"></script>
    <script src="js/init.js" type="text/javascript"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->

    <title>Электронный дневник студента</title>

</head>
<body>
<nav class="container">
    <div class="navb">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="ico">
                <img src="image/logo.jpg">
            </div>
            <div class="logo">
                <p>Электронный дневник УлГУ/Преподаватель</p>
            </div>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <ul class="menu-main">
                <li><a href="index.php">Главная</a></li>
                <li><a href="auth_student.php">Студент</a></li>
            </ul>
        </div>


    </div>
</nav>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

        <section class="container">
            <div class="login">
                <h1>Войти в личный кабинет</h1>
                <div class ='errors'> <?=$errors ?> </div>

                <form method="post">
                    <p><input type="text" name='login' value='<?=$login?>' placeholder="Логин"></p>
                    <p><input type="password" name='pass' value='<?=$pass?>'  placeholder="Пароль"></p>

                    <p class="submit"><input type="submit" name='sub' value="Войти"></p>
                </form>
            </div>
        </section>

    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
        <div class="block">
            <div class="text-content">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="ico-v">
                        <img src="image/diary1.png">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <h1>
                        Электронный дневник УлГУ/Преподаватель.
                    </h1>
                    <p>В подсистеме "Кабинет преподавателя" - каждый преподаватель сможет отмечать успеваемость студентов каждой группы,
                        в которых преподает. Выкладывать задания лабораторных и практических работ.
                    </p>

                </div>
            </div>
        </div>
    </div>



</div>
</body>

</html>
