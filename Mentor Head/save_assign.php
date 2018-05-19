<?php
session_start();

if(!$_SESSION['mid'])
{

   header("Location: ../../home.php");//redirect to login page to secure the welcome page without login access.
}

?>



<?php

$s_id = htmlspecialchars($_REQUEST['s_id']);
$s_name = htmlspecialchars($_REQUEST['s_name']);
//$s_branch = htmlspecialchars($_REQUEST['s_branch']);
$s_email = htmlspecialchars($_REQUEST['s_email']);
$s_contact = htmlspecialchars($_REQUEST['s_contact']);
$s_password = htmlspecialchars($_REQUEST['s_password']);

include 'conn.php';
//mapping mentor head to its branch
$m_id = $_SESSION['mid'];
	$fetch_branch = "SELECT m_id, m_branch, m_name FROM mentor_head WHERE m_id='$m_id'";
	$result_branch = mysqli_query($dbcon,$fetch_branch);

	$get_branch = mysqli_fetch_array($result_branch,MYSQLI_ASSOC);
	$m_branch	= $get_branch['m_branch'];

	$m_name		= $get_branch['m_name'];
	mysqli_free_result($result_branch);

	$s_branch = $m_branch;

// easyui code as it is generally
$sql = "insert into student(s_id,s_name,s_branch,s_email,s_contact) values('$s_id','$s_name','$s_branch','$s_email','$s_contact')";
$sql2 = "insert into s_login(s_id,s_password)values('$s_id','$s_password')";

$result = @mysqli_query($dbcon,$sql);
$result2= @mysqli_query($dbcon,$sql2);
if ($result && $result2){
	echo json_encode(array(
		's_id' 			=> $s_id,
		's_name' 		=> $s_name,
		's_branch' 		=> $s_branch,
		's_email' 		=> $s_email,
		's_contact' 	=> $s_contact,
		's_password' 	=> $s_password
	));
} else {
	echo json_encode(array('errorMsg'=>'User already exists.'));
}
?>
