<?php
include_once 'connect.php';
$discipline_id = @intval($_GET['discipline_id']);

$regs=mysql_query("SELECT name, grou_id FROM grou WHERE discipline_id=$discipline_id");

if ($regs) {
    $num = mysql_num_rows($regs);
    $i = 0;
    while ($i < $num) {
       $groups[$i] = mysql_fetch_assoc($regs);
       $i++;
    }     
    $result = array('groups'=>$groups);
}
else {
	$result = array('type'=>'error');
}

print json_encode($result);
?>