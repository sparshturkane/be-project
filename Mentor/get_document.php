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
										document_link.s_dlink_ssc,
										document_link.s_dlink_hsc,
										
										document_link.s_dlink_sem1,
										document_link.s_dlink_sem2,
										document_link.s_dlink_sem3,
										document_link.s_dlink_sem4,
										document_link.s_dlink_sem5,
										document_link.s_dlink_sem6,
										document_link.s_dlink_sem7,
										document_link.s_dlink_sem8,
										
										document_link.s_dlink_sport1,
										document_link.s_dlink_sport2,
										document_link.s_dlink_sport3,
										document_link.s_dlink_sport4,
										document_link.s_dlink_sport5,
										document_link.s_dlink_sport6,
										document_link.s_dlink_sport7,
										document_link.s_dlink_sport8,
										document_link.s_dlink_sport9,
										document_link.s_dlink_sport10,
										
										document_link.s_dlink_coca1,
										document_link.s_dlink_coca2,
										document_link.s_dlink_coca3,
										document_link.s_dlink_coca4,
										document_link.s_dlink_coca5,
										document_link.s_dlink_coca6,
										document_link.s_dlink_coca7,
										document_link.s_dlink_coca8,
										document_link.s_dlink_coca9,
										document_link.s_dlink_coca10,
										
										document_link.s_dlink_acad1,
										document_link.s_dlink_acad2,
										document_link.s_dlink_acad3,
										document_link.s_dlink_acad4,
										document_link.s_dlink_acad5,
										document_link.s_dlink_acad6,
										document_link.s_dlink_acad7,
										document_link.s_dlink_acad8,
										document_link.s_dlink_acad9,
										document_link.s_dlink_acad10,
										
										
										
										
										s_profile.f_id
										
										FROM 	s_profile
										
										INNER JOIN student
										ON student.s_id = s_profile.s_id
										
										INNER JOIN document_link
										ON document_link.s_id = s_profile.s_id 
										
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
