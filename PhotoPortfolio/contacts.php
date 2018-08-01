
<!DOCTYPE html>
<html>
<head>
    <!-- META -->
    <meta charset = "utf-8">

    <title>Contacts</title>


</head>
<body>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: 20px 0px 0px 190px; z-index: 1; position: fixed;">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <div class="info col-lg-12 col-md-12 col-sm-12 col-xs-12">
            +7(917)619-64-38
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding:0;">
                <a href="https://vk.com/club154663248" target="_blank"><img src="image/vk_k.png" class="img-responsive"></a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding:0;">
                <a href="https://www.instagram.com/antipkin.sergey/" target="_blank"><img src="image/instagram_k.png" class="img-responsive"></a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
    </div>
    <div class="info_e col-lg-5 col-md-5 col-sm-5 col-xs-5">
        e-meil: </br>sergey.antypkin@yandex.ru
    </div>
</div>

<div class="form col-lg-10 col-md-10 col-sm-12 col-xs-12">
    <form class="contact_form" action="#" method="post" name="contact_form">
        <ul>
            <li>
                <h2>Contact Us</h2>
                <span class="required_notification">* Denotes Required Field</span>
            </li>
            <li>
                <label for="name">Name:</label>
                <input type="text"  placeholder="John Doe" required />
            </li>
            <li>
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="john_doe@example.com" required />
                <span class="form_hint">Proper format "name@something.com"</span>
            </li>
            <li>
                <label for="phone">Phone:</label>
                <input type="tel" name="phone" placeholder="7-xxx-xx-xx-xx" required pattern="7-[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}"/>
                <span class="form_hint">Proper format "7-xxx-xx-xx-xx"</span>
            </li>
            <li>
                <label for="message">Message:</label>
                <textarea name="message" cols="40" rows="6" required ></textarea>
            </li>
                <button class="submit" type="submit">Submit Form</button>
        </ul>
    </form>
    <div class="border col-lg-9 col-lg-offset-1 col-md-9 col-md-offset-1 col-sm-10 col-xs-10"><img src="image/curl.png" class="img-responsive"></div>
</div>
<!--<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="margin: 20px 0px 0px 150px; z-index: 1; text-align: center;">
    <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10">
        <a class="vk" href="https://vk.com/id166637399" target="_blank">В контакте</a>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10" style="margin-top: 20px">
        <a class="grad" href="https://vk.com/id166637399" target="_blank">Инстаграм</a>
    </div>
    <div class="more1 col-lg-3 col-md-3 col-sm-3 col-xs-3">
    </div>
    <div class="more1 col-lg-5 col-md-5 col-sm-5 col-xs-5">
    </div>
</div>-->

<!--
<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['fio']) and !isset($_POST['email'])){
    ?>
<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="margin: 20px 0px 0px 150px; z-index: 1; text-align: center;">
    <form action="index.php" method="post">
        <input type="text" name="fio" placeholder="Укажите ФИО" required>
        <input type="text" name="email" placeholder="Укажите e-mail" required>
        <input type="submit" value="Отправить">
    </form>
</div>
    <?php
} else {
//показываем форму
    $fio = $_POST['fio'];
    $email = $_POST['email'];
    $fio = htmlspecialchars($fio);
    $email = htmlspecialchars($email);
    $fio = urldecode($fio);
    $email = urldecode($email);
    $fio = trim($fio);
    $email = trim($email);
    if (mail("madam.antipckina2014@yandex.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: madam.antipckina2014@yandex.ru \r\n")){
        echo "Сообщение успешно отправлено";
    } else {
        echo "При отправке сообщения возникли ошибки";
    }
}
?>
-->
</body>
</html>