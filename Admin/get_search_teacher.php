<?php
session_start();

if(!$_SESSION['aid'])
{

   header("Location: ../../home.php");//redirect to login page to secure the welcome page without login access.
}

?>
<?php
	include 'conn.php';

	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$f_id = isset($_POST['f_id']) ? mysqli_real_escape_string($dbcon,$_POST['f_id']) : '';
	$f_name = isset($_POST['f_name']) ? mysqli_real_escape_string($dbcon,$_POST['f_name']) : '';

	$offset = ($page-1)*$rows;

	$result = array();
//mapping mentor head to its branch

	
		//easyui code as it is generally
	$where = "f_id like '$f_id%' and f_name like '$f_name%'";
	$rs = mysqli_query($dbcon,"select count(*) from faculty where " . $where);
	$row = mysqli_fetch_row($rs);
	$result["total"] = $row[0];

	$rs = mysqli_query($dbcon,"SELECT 	f_id,
										f_name,
										f_branch,
										f_email,
										f_contact
										
								FROM 	faculty
								WHERE " . $where . " limit $offset,$rows");
	
	//select * from student where " . $where . " limit $offset,$rows
	/*SELECT 	student.f_id,
										student.f_name,
										student.s_branch,
										s_login.s_password,
										s_profile.f_id,
										s_profile.s_year
								FROM 	s_profile
								INNER JOIN student 
									ON student.f_id = s_profile.f_id
								INNER JOIN s_login 
									ON s_login.f_id = s_profile.f_id WHERE student.s_branch ='$m_branch' limit $offset,$rows*/

	$items = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;

	echo json_encode($result);
?>
