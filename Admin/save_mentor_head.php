<?php
session_start();

if(!$_SESSION['aid'])
{

   header("Location: ../home.php");//redirect to login page to secure the welcome page without login access.
}

?>



<?php

$m_id = htmlspecialchars($_REQUEST['m_id']);
$m_name = htmlspecialchars($_REQUEST['m_name']);
$m_branch = htmlspecialchars($_REQUEST['m_branch']);
$m_password = htmlspecialchars($_REQUEST['m_password']);

include 'conn.php';
//mapping mentor head to its branch


// easyui code as it is generally
$sql = "insert into mentor_head(m_id,m_name,m_branch,m_password) values('$m_id','$m_name','$m_branch','$m_password')";



$result = @mysqli_query($dbcon,$sql);


if ($result){
	echo json_encode(array(
		'm_id' 			=> $m_id,
		'm_name' 		=> $m_name,
		'm_branch' 		=> $m_branch,
		'm_password' 	=> $m_password
	));
} else {
	echo json_encode(array('errorMsg'=>'User already exists.'));
}
?>
