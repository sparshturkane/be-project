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
										attendance.s_sem3_july,
										attendance.s_sem3_aug,
										attendance.s_sem3_sept,
										attendance.s_sem3_oct,
										attendance.s_sem3_nov,
									
										attendance.s_sem4_jan,
										attendance.s_sem4_feb,
										attendance.s_sem4_mar,
										attendance.s_sem4_april,
										attendance.s_sem4_may,
										
										attendance.s_sem5_july,
										attendance.s_sem5_aug,
										attendance.s_sem5_sept,
										attendance.s_sem5_oct,
										attendance.s_sem5_nov,
										
										attendance.s_sem6_jan,
										attendance.s_sem6_feb,
										attendance.s_sem6_mar,
										attendance.s_sem6_april,
										attendance.s_sem6_may,
										
										attendance.s_sem7_july,
										attendance.s_sem7_aug,
										attendance.s_sem7_sept,
										attendance.s_sem7_oct,
										attendance.s_sem7_nov,
										
										attendance.s_sem8_jan,
										attendance.s_sem8_feb,
										attendance.s_sem8_mar,
										attendance.s_sem8_april,
										attendance.s_sem8_may,
										s_profile.f_id
										
										FROM 	s_profile
										
										INNER JOIN student
										ON student.s_id = s_profile.s_id
										
										INNER JOIN attendance
										ON attendance.s_id = s_profile.s_id 
										
										WHERE s_profile.f_id='$f_id' 
										ORDER BY student.s_id ASC  
										limit $offset,$rows");

	$items = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;

	echo json_encode($result);

?>
