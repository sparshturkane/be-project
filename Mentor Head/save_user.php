<?php
session_start();

if(!$_SESSION['mid'])
{

   header("Location: ../../home.php");//redirect to login page to secure the welcome page without login access.
}

?>



<?php

$f_id = htmlspecialchars($_REQUEST['f_id']);
$f_name = htmlspecialchars($_REQUEST['f_name']);
//$f_branch = htmlspecialchars($_REQUEST['f_branch']);
$f_email = htmlspecialchars($_REQUEST['f_email']);
$f_contact = htmlspecialchars($_REQUEST['f_contact']);
$f_password = htmlspecialchars($_REQUEST['f_password']);

include 'conn.php';
//mapping mentor head to its branch
$m_id = $_SESSION['mid'];
	$fetch_branch = "SELECT m_id, m_branch, m_name FROM mentor_head WHERE m_id='$m_id'";
	$result_branch = mysqli_query($dbcon,$fetch_branch);
	
	$get_branch = mysqli_fetch_array($result_branch,MYSQLI_ASSOC);
	$m_branch	= $get_branch['m_branch'];

	$m_name		= $get_branch['m_name'];
	mysqli_free_result($result_branch);
	
	$f_branch = $m_branch;

// easyui code as it is generally
$sql = "insert into faculty(f_id,f_name,f_branch,f_email,f_contact) values('$f_id','$f_name','$f_branch','$f_email','$f_contact')";
$sql2 = "insert into f_login(f_id,f_password)values('$f_id','$f_password')";

$result = @mysqli_query($dbcon,$sql);
$result2= @mysqli_query($dbcon,$sql2);
if ($result && $result2){
	echo json_encode(array(
		'f_id' 			=> $f_id,
		'f_name' 		=> $f_name,
		'f_branch' 		=> $f_branch,
		'f_email' 		=> $f_email,
		'f_contact' 	=> $f_contact,
		'f_password' 	=> $f_password
	));
} else {
	echo json_encode(array('errorMsg'=>'User already exists.'));
}
?>