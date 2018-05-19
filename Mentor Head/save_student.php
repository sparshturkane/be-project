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
//$f_branch = htmlspecialchars($_REQUEST['f_branch']);
//$s_email = htmlspecialchars($_REQUEST['s_email']);
//$s_contact = htmlspecialchars($_REQUEST['s_contact']);
//$s_branch = htmlspecialchars($_REQUEST['s_branch']);
$s_year = htmlspecialchars($_REQUEST['s_year']);
$f_id = htmlspecialchars($_REQUEST['f_id']);
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
$sql = "insert into student(s_id,s_name,s_branch) values('$s_id','$s_name','$s_branch')";
$sql2 = "insert into s_login(s_id,s_password)values('$s_id','$s_password')";
$sql3 = "insert into academic_record(s_id)values('$s_id')";
$sql4 = "insert into attendance(s_id)values('$s_id')";
$sql5 = "insert into term_test(s_id)values('$s_id')";
$sql6 = "insert into s_profile(s_id,f_id,s_year,s_branch)values('$s_id','$f_id','$s_year','$s_branch')";
$sql7 = "insert into document_link(s_id)values('$s_id')";

$result = @mysqli_query($dbcon,$sql);
$result2= @mysqli_query($dbcon,$sql2);
$result3 = @mysqli_query($dbcon,$sql3);
$result4 = @mysqli_query($dbcon,$sql4);
$result5 = @mysqli_query($dbcon,$sql5);
$result6 = @mysqli_query($dbcon,$sql6);
$result7 = @mysqli_query($dbcon,$sql7);
if ($result){
	echo json_encode(array(
		's_id' 			=> $s_id,
		's_name' 		=> $s_name,
		//'f_branch' 		=> $f_branch,
		's_branch' 		=> $s_branch,
		's_year' 		=> $s_year,
		'f_id' 			=> $f_id,
		's_password' 	=> $s_password
	));
} else {
	echo json_encode(array('errorMsg'=>'User already exists.'));
}
?>
