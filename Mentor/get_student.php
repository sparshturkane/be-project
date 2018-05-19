<?php
session_start();

if(!$_SESSION['fid'])
{

   header("Location: ../home.php");//redirect to login page to secure the welcome page without login access.
}

?>

<?php
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();

	include 'conn.php';


	//mapping mentor head to its branch
	$f_id = $_SESSION['fid'];
	$fetch_branch = "SELECT * FROM faculty WHERE f_id='$f_id'";
	$result_branch = mysqli_query($dbcon,$fetch_branch);

	$get_branch = mysqli_fetch_array($result_branch,MYSQLI_ASSOC);
	$f_branch	= $get_branch['f_branch'];
	$f_name		= $get_branch['f_name'];
	mysqli_free_result($result_branch);


	//easyui code as it is generally
	$rs = mysqli_query($dbcon,"select count(*) from s_profile WHERE f_id='$f_id'");
	$row = mysqli_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = mysqli_query($dbcon,"SELECT 	student.s_id, 
										student.s_name, 
										student.s_branch, 
										s_profile.s_year, 
										s_profile.f_id 
										FROM student 
										INNER JOIN s_profile 
										ON student.s_id = s_profile.s_id 
										WHERE student.s_branch ='$f_branch' AND s_profile.f_id='$f_id' 
										ORDER BY student.s_id ASC  
										limit $offset,$rows");

	$items = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;

	echo json_encode($result);

?>
