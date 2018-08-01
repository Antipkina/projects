<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta application/json;>
    <title></title>
    <link rel="stylesheet" href="css/graph.css">
    <meta name="robots" content="noindex,follow" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/jquery.flot.min.js"></script>
</head>
<body>
<div id="graph-wrapper">
    <div class="graph-info">
        <a href="#" id="bars"><span></span></a>
        <a href="#" id="lines" class="active"><span></span></a>
    </div>

    <div class="graph-container">
        <div id="graph-lines"></div>
        <div id="graph-bars"></div>
    </div>
</div>
<?php

include('/bd.php');
if ($result = mysqli_query($link, 'SELECT lab.name7, student.id, student.login FROM `lab`  INNER JOIN `student` ON lab.student_id = student.id WHERE student.grou_id = 5')) {
    while($obj = $result->fetch_object()){
        $array[]=array((int)$obj->id, (int)$obj->name7);
    }
    mysqli_free_result($result);
}
$ar_js = json_encode($array);
include('graph.php');
?>

