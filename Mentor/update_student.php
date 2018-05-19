<?php

$id = $_REQUEST['s_id'];

$s_year = htmlspecialchars($_REQUEST['s_year']);


include 'conn.php';
$sql = "update s_profile set s_year='$s_year' where s_id='$id'";
$result= @mysqli_query($dbcon,$sql);
if ($result){
	echo json_encode(array(
		's_year' 	=> $s_year
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>
