<?php

include('bd.php');
if ($result = mysqli_query($link, 'SELECT * FROM `lab`')) {


//$db = mysqli_connect("db_host", "db_user", "db_pass", "db_name");
//if ($result = mysqli_query($db, "select name, click from chart")) {
    while($obj = $result->fetch_object()){
        $array[]=array("x"=>(int)$obj->name7, "y"=>(int)$obj->click);
    }
    /* очищаем результирующий набор */
    mysqli_free_result($result);
}


$ar_js = json_encode($array);
/*header("HTTP/1.0 200 OK");
header('Content-type: application/json; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 2017 05:00:00 GMT");
header("Pragma: no-cache");*/

print_r($ar_js);
?>