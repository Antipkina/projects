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
if (empty($_POST['commmand'])) exit;

require_once dirname(__FILE__) . '/db.php';

$data = array();

switch ($_POST['commmand']) {
    case 'load-brunch':
        $pid = empty($_POST['parentID'])? 0 : $_POST['parentID'];
        $res = db_query("SELECT * FROM tree WHERE pID = :pid", array(':pid' => $pid));

        if ($res->num_rows)
            while ($r = $res->fetch_object())
                $data[] = $r;

        break;
    case 'load-object':
        $id = empty($_POST['objectID'])? 0 : $_POST['objectID'];
        $res = db_query("SELECT * FROM items WHERE IDobj = :id", array(':id' => $id));

        if ($res->num_rows)
            $data = $res->fetch_object();

}
print_r($data);
echo json_encode($data, true);