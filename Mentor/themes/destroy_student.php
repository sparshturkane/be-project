<?php

$id = intval($_REQUEST['id']);

include 'conn.php';

$sql = "delete from faculty where f_id=$id";
$sql2 = "delete from f_login where f_id=$id";
$result = @mysqli_query($dbcon,$sql);
$result2 = @mysqli_query($dbcon,$sql2);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>
