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
										
										term_test.s_sem3_sub1_tt1,
										term_test.s_sem3_sub1_tt2,
										term_test.s_sem3_sub2_tt1,
										term_test.s_sem3_sub2_tt2,
										term_test.s_sem3_sub3_tt1,
										term_test.s_sem3_sub3_tt2,
										term_test.s_sem3_sub4_tt1,
										term_test.s_sem3_sub4_tt2,
										term_test.s_sem3_sub5_tt1,
										term_test.s_sem3_sub5_tt2,
										term_test.s_sem3_sub6_tt1,
										term_test.s_sem3_sub6_tt2,
									
										term_test.s_sem4_sub1_tt1,
										term_test.s_sem4_sub1_tt2,
										term_test.s_sem4_sub2_tt1,
										term_test.s_sem4_sub2_tt2,
										term_test.s_sem4_sub3_tt1,
										term_test.s_sem4_sub3_tt2,
										term_test.s_sem4_sub4_tt1,
										term_test.s_sem4_sub4_tt2,
										term_test.s_sem4_sub5_tt1,
										term_test.s_sem4_sub5_tt2,
										term_test.s_sem4_sub6_tt1,
										term_test.s_sem4_sub6_tt2,
										
										term_test.s_sem5_sub1_tt1,
										term_test.s_sem5_sub1_tt2,
										term_test.s_sem5_sub2_tt1,
										term_test.s_sem5_sub2_tt2,
										term_test.s_sem5_sub3_tt1,
										term_test.s_sem5_sub3_tt2,
										term_test.s_sem5_sub4_tt1,
										term_test.s_sem5_sub4_tt2,
										term_test.s_sem5_sub5_tt1,
										term_test.s_sem5_sub5_tt2,
										term_test.s_sem5_sub6_tt1,
										term_test.s_sem5_sub6_tt2,
										
										term_test.s_sem6_sub1_tt1,
										term_test.s_sem6_sub1_tt2,
										term_test.s_sem6_sub2_tt1,
										term_test.s_sem6_sub2_tt2,
										term_test.s_sem6_sub3_tt1,
										term_test.s_sem6_sub3_tt2,
										term_test.s_sem6_sub4_tt1,
										term_test.s_sem6_sub4_tt2,
										term_test.s_sem6_sub5_tt1,
										term_test.s_sem6_sub5_tt2,
										term_test.s_sem6_sub6_tt1,
										term_test.s_sem6_sub6_tt2,
										
										term_test.s_sem7_sub1_tt1,
										term_test.s_sem7_sub1_tt2,
										term_test.s_sem7_sub2_tt1,
										term_test.s_sem7_sub2_tt2,
										term_test.s_sem7_sub3_tt1,
										term_test.s_sem7_sub3_tt2,
										term_test.s_sem7_sub4_tt1,
										term_test.s_sem7_sub4_tt2,
										term_test.s_sem7_sub5_tt1,
										term_test.s_sem7_sub5_tt2,
										term_test.s_sem7_sub6_tt1,
										term_test.s_sem7_sub6_tt2,
										
										term_test.s_sem8_sub1_tt1,
										term_test.s_sem8_sub1_tt2,
										term_test.s_sem8_sub2_tt1,
										term_test.s_sem8_sub2_tt2,
										term_test.s_sem8_sub3_tt1,
										term_test.s_sem8_sub3_tt2,
										term_test.s_sem8_sub4_tt1,
										term_test.s_sem8_sub4_tt2,
										term_test.s_sem8_sub5_tt1,
										term_test.s_sem8_sub5_tt2,
										term_test.s_sem8_sub6_tt1,
										term_test.s_sem8_sub6_tt2,
										
										
										
										s_profile.f_id
										
										FROM 	s_profile
										
										INNER JOIN student
										ON student.s_id = s_profile.s_id
										
										INNER JOIN term_test
										ON term_test.s_id = s_profile.s_id 
										
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
