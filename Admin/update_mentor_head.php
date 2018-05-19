<?php
$id = $_REQUEST['id'];
$m_id = htmlspecialchars($_REQUEST['m_id']);
$m_name = htmlspecialchars($_REQUEST['m_name']);
$m_branch = htmlspecialchars($_REQUEST['m_branch']);
$m_password = htmlspecialchars($_REQUEST['m_password']);

include 'conn.php';

$sql = "update mentor_head 
					set m_id='$m_id',
						m_name='$m_name',
						m_branch='$m_branch',
						m_password='$m_password'
						
						where m_id='$id'";


$result = @mysqli_query($dbcon,$sql);


if ($result){
	echo json_encode(array(
		'm_id' 			=> $id,
		'm_name' 		=> $m_name,
		'm_branch' 		=> $m_branch,
		'm_password' 	=> $m_password
	));
} else {
	echo json_encode(array('errorMsg'=>'Some errors occured.'));
}
?>
