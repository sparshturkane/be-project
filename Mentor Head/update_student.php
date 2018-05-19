<?php

$id = $_REQUEST['id'];
$s_id = htmlspecialchars($_REQUEST['s_id']);
$s_name = htmlspecialchars($_REQUEST['s_name']);
//$f_branch = htmlspecialchars($_REQUEST['f_branch']);
//$s_email = htmlspecialchars($_REQUEST['s_email']);
//$s_contact = htmlspecialchars($_REQUEST['s_contact']);
//$s_branch = htmlspecialchars($_REQUEST['s_branch']);
$s_year = htmlspecialchars($_REQUEST['s_year']);
$f_id = htmlspecialchars($_REQUEST['f_id']);
$s_password = htmlspecialchars($_REQUEST['s_password']);

include 'conn.php';

$sql = "update student set s_id='$s_id',s_name='$s_name' where s_id='$id'";
$sql2 = "update s_login set s_id='$s_id',s_password='$s_password' where s_id='$id'";
$sql3 = "update academic_record set s_id='$s_id' where s_id='$id'";
$sql4 = "update attendance set s_id='$s_id' where s_id='$id'";
$sql5 = "update term_test set s_id='$s_id' where s_id='$id'";
$sql6 = "update s_profile set s_id='$s_id',f_id='$f_id',s_year='$s_year' where s_id='$id'";

$sql7 = "update document_link set s_id='$s_id' where s_id='$id'";

$result = @mysqli_query($dbcon,$sql);
$result2= @mysqli_query($dbcon,$sql2);
$result3 = @mysqli_query($dbcon,$sql3);
$result4 = @mysqli_query($dbcon,$sql4);
$result5 = @mysqli_query($dbcon,$sql5);
$result6 = @mysqli_query($dbcon,$sql6);
$result7 = @mysqli_query($dbcon,$sql7);
if ($result && $result2){
	echo json_encode(array(
		's_id' 			=> $id,
		's_name' 		=> $s_name,
		//'f_branch' 		=> $f_branch,
		//'s_branch' 		=> $s_branch,
		's_year' 		=> $s_year,
		'f_id' 			=> $f_id,
		's_password' 	=> $s_password
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>
