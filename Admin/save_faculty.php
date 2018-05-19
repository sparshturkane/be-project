<?php
session_start();

if(!$_SESSION['aid'])
{

   header("Location: ../home.php");//redirect to login page to secure the welcome page without login access.
}

?>



<?php

$f_id = htmlspecialchars($_REQUEST['f_id']);
$f_name = htmlspecialchars($_REQUEST['f_name']);
$f_branch = htmlspecialchars($_REQUEST['f_branch']);
$f_email = htmlspecialchars($_REQUEST['f_email']);
$f_contact = htmlspecialchars($_REQUEST['f_contact']);
$f_password = htmlspecialchars($_REQUEST['f_password']);

include 'conn.php';
//mapping mentor head to its branch


// easyui code as it is generally
$sql = "insert into faculty(f_id,f_name,f_branch,f_email,f_contact) values('$f_id','$f_name','$f_branch','$f_email','$f_contact')";
$sql2 = "insert into f_login(f_id,f_password)values('$f_id','$f_password')";


$result = @mysqli_query($dbcon,$sql);
$result2= @mysqli_query($dbcon,$sql2);

if ($result){
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
