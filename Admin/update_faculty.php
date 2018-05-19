<?php
$id = $_REQUEST['id'];
$f_id 			= htmlspecialchars($_REQUEST['f_id']);
$f_name 		= htmlspecialchars($_REQUEST['f_name']);
$f_branch 		= htmlspecialchars($_REQUEST['f_branch']);
$f_email 		= htmlspecialchars($_REQUEST['f_email']);
$f_contact 		= htmlspecialchars($_REQUEST['f_contact']);
$f_password 	= htmlspecialchars($_REQUEST['f_password']);

include 'conn.php';

$sql = "update faculty 
					set f_id='$f_id',
						f_name='$f_name',
						f_branch='$f_branch',
						f_email='$f_email',
						f_contact='$f_contact' 
						
						where f_id='$id'";
$sql2 = "update f_login 
					set f_id='$f_id',
						f_password='$f_password' 
						
						where f_id='$id'";

$result = @mysqli_query($dbcon,$sql);
$result2= @mysqli_query($dbcon,$sql2);

if ($result && $result2){
	echo json_encode(array(
		'f_id' 			=> $id,
		'f_name' 		=> $f_name,
		'f_branch' 		=> $f_branch,
		'f_email' 		=> $f_email,
		'f_contact' 	=> $f_contact,
		'f_password' 	=> $f_password
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>
