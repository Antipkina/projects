<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
echo $fio;
echo "<br>";
echo $fio;
mail("madam.antipckina2014@yandex.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: madam.antipckina2014@yandex.ru \r\n");
if (mail("madam.antipckina2014@yandex.ru", "Заказ с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: madam.antipckina2014@yandex.ru \r\n"))
{
    echo "yes";
} else {
    echo "no";
}