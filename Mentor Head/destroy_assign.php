<?php

$id = intval($_REQUEST['id']);

include 'conn.php';

$sql = "delete from student where s_id=$id";
$sql2 = "delete from s_login where s_id=$id";
$result = @mysqli_query($dbcon,$sql);
$result2 = @mysqli_query($dbcon,$sql2);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>
