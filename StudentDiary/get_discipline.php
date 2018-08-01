<?php
include_once 'connect.php';
$teacher_id = @intval($_GET['teacher_id']);

$regs=mysql_query("SELECT name, discipline_id  FROM discipline WHERE teacher_id=$teacher_id");
 
if ($regs) {
    $num = mysql_num_rows($regs);      
    $i = 0;
    while ($i < $num) {
       $disciplines[$i] = mysql_fetch_assoc($regs);
       $i++;
    }     
    $result = array('disciplines'=>$disciplines);
}
else {
	$result = array('type'=>'error');
}

print json_encode($result);
?>