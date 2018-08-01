<?php
include_once 'connect.php';
$week_id = @intval($_GET['week_id']);
$name = @intval($_POST['name']);


$regs=mysql_query("SELECT name, syll_id  FROM region WHERE week_id=$week_id AND name=$name");

if ($regs) {

    $num = mysql_num_rows($regs);
    $i = 0;
    while ($i < $num) {
        $weeks[$i] = mysql_fetch_assoc($regs);

        $i++;
    }
    $result = array('weeks'=>$weeks);
}
else {
    $result = array('type'=>'error');
}
//echo $name;
print json_encode($result);
?>