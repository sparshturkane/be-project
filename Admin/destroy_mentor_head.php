<?php

$id = $_REQUEST['id'];

include 'conn.php';

$sql = "delete from mentor_head where m_id='$id'";


$result = @mysqli_query($dbcon,$sql);


if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>
