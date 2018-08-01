<?php
$link = mysqli_connect(
'localhost',  /* Хост, к которому мы подключаемся */
'root',       /* Имя пользователя */
'',   /* Используемый пароль */
'diary');     /* База данных для запросов по умолчанию */

if (!$link) {
    printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

if (isset($_POST['name'])) {
    $column = $_POST['name'];
    if ($_POST['name'] == 'data' || $_POST['name'] == 'data1' || $_POST['name'] == 'data2') {
        $newValue = $_POST['value'];
        //echo $newValue;
    } else if ($_POST['name'] == 'address') {
        //var_dump($_POST); die;
        $newValue = $_POST['value']['city'] . ', ул. ' . $_POST['value']['street'] . ', дом. ' . $_POST['value']['building'];
    } else {
        $newValue = $_POST['value'];
    }


    if ($id = $_POST['pk'])
       $sql = "UPDATE `lab` SET $column = '$newValue' where id = $id";
    mysqli_query($link, $sql);
       $s = "UPDATE `attendance` SET $column = '$newValue' where id = $id";
    mysqli_query($link, $s);
     $sg = "UPDATE `mark` SET $column = '$newValue' where id = $id";
    mysqli_query($link, $sg);

}
