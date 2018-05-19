<?php

$id = $_REQUEST['s_id'];

$f_id = htmlspecialchars($_REQUEST['f_id']);


include 'conn.php';
$sql = "update s_profile set f_id='$f_id' where s_id='$id'";
$result= @mysqli_query($dbcon,$sql);
if ($result){
	echo json_encode(array(
		'f_id' 	=> $f_id
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>
