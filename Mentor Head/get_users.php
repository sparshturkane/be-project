<?php
session_start();

if(!$_SESSION['mid'])
{

   header("Location: ../../home.php");//redirect to login page to secure the welcome page without login access.
}

?>

<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	
	include 'conn.php';
	
	
	//mapping mentor head to its branch
	$m_id = $_SESSION['mid'];
	$fetch_branch = "SELECT m_id, m_branch, m_name FROM mentor_head WHERE m_id='$m_id'";
	$result_branch = mysqli_query($dbcon,$fetch_branch);
	
	$get_branch = mysqli_fetch_array($result_branch,MYSQLI_ASSOC);
	$m_branch	= $get_branch['m_branch'];

	$m_name		= $get_branch['m_name'];
	mysqli_free_result($result_branch);
	
	
	//easyui code as it is generally 
	$rs = mysqli_query($dbcon,"select count(*) from faculty WHERE f_branch='$m_branch'");
	$row = mysqli_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = mysqli_query($dbcon,"SELECT faculty.f_id, faculty.f_name, faculty.f_branch, f_login.f_password, faculty.f_email, faculty.f_contact FROM faculty INNER JOIN f_login ON faculty.f_id = f_login.f_id WHERE faculty.f_branch ='$m_branch' ORDER BY f_login.f_id ASC limit $offset,$rows");
	
	$items = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;

	echo json_encode($result);

?>