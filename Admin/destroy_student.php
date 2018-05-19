<?php

$id = $_REQUEST['id'];

include 'conn.php';

$sql = "delete from student where s_id='$id'";
$sql2 = "delete from s_login where s_id='$id'";
$sql3 = "delete from academic_record where s_id='$id'";
$sql4 = "delete from attendance where s_id='$id'";
$sql5 = "delete from term_test where s_id='$id'";
$sql6 = "delete from s_profile where s_id='$id'";
$sql7 = "delete from document_link where s_id='$id'";

$result = @mysqli_query($dbcon,$sql);
$result2 = @mysqli_query($dbcon,$sql2);
$result3 = @mysqli_query($dbcon,$sql3);
$result4 = @mysqli_query($dbcon,$sql4);
$result5 = @mysqli_query($dbcon,$sql5);
$result6 = @mysqli_query($dbcon,$sql6);
$result7 = @mysqli_query($dbcon,$sql7);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>
