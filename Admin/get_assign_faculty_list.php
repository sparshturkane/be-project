<?php
session_start();

if(!$_SESSION['aid'])
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



	//easyui code as it is generally
	$rs = mysqli_query($dbcon,"select count(*) from faculty ");
	$row = mysqli_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = mysqli_query($dbcon,"SELECT f_id,f_name,f_branch FROM faculty    limit $offset,$rows");

	$items = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;

	echo json_encode($result);

?>
