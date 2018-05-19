<?php
session_start();

if(!$_SESSION['aid'])
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


	$m_branch="Civil Engineering";
	//easyui code as it is generally
	$rs = mysqli_query($dbcon,"SELECT count(*) FROM s_profile WHERE s_branch='$m_branch' ");
	$row = mysqli_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = mysqli_query($dbcon," SELECT 	student.s_id,
										student.s_name,
										student.s_branch,
										s_login.s_password,
										s_profile.f_id,
										s_profile.s_year
								FROM 	s_profile
								INNER JOIN student
									ON student.s_id = s_profile.s_id
								INNER JOIN s_login
									ON s_login.s_id = s_profile.s_id WHERE student.s_branch ='$m_branch'  limit $offset,$rows");

	$items = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;

	echo json_encode($result);

?>
