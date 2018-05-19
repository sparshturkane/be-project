<?php
session_start();

if(!$_SESSION['fid'])
{

   header("Location: ../../home.php");//redirect to login page to secure the welcome page without login access.
}

?>
<?php
include 'db_connection.php';
//subject name get thing lets do it
//subject name of perticular branch and semester
//loggined mentor details 
	$f_id = $_SESSION['fid'];
	$fetch_branch = "SELECT * FROM faculty WHERE f_id='$f_id'";
	$result_branch = mysqli_query($dbcon,$fetch_branch);

	$get_branch = mysqli_fetch_array($result_branch,MYSQLI_ASSOC);
	$f_branch	= $get_branch['f_branch'];
	$f_name		= $get_branch['f_name'];
	mysqli_free_result($result_branch);
	
	
//getting subject name of Semester 3

	$display_in_html 		= "SELECT 	* FROM subject_name WHERE branch_name= '$f_branch'";
	$result 		 		= mysqli_query($dbcon,$display_in_html) or trigger_error(mysqli_error().$display_in_html);
	$print = mysqli_fetch_array($result,MYSQLI_ASSOC);
	//ssc details
	$s_sem3_sub1			= $print['s_sem3_sub1'];
	$s_sem3_sub2			= $print['s_sem3_sub2'];
	$s_sem3_sub3			= $print['s_sem3_sub3'];
	$s_sem3_sub4			= $print['s_sem3_sub4'];
	$s_sem3_sub5			= $print['s_sem3_sub5'];
	$s_sem3_sub6			= $print['s_sem3_sub6'];

	mysqli_free_result($result);


?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'swhead.php';
?>

<title>Sem 3 TT | mentor system</title>
	<link rel="stylesheet" type="text/css" href="themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="themes/icon.css">
	<link rel="stylesheet" type="text/css" href="themes/color.css">
	<link rel="stylesheet" type="text/css" href="demo/demo.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery.easyui.min.js"></script>
	<script type="text/javascript" src="jquery.edatagrid.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#dg').edatagrid({
				url: 'get_term_test.php',
				//updateUrl: 'update_student.php'
			});
		});
		
	//	$(function(){
	//		$('#dg2').edatagrid({
	//			url: 'get_assign_faculty_list.php'
	//		});
	//	});
	</script>
</head><!--/head-->

<body class="homepage">

<?php
include 'swheader.php';
?>
<?php
echo $_SESSION['fid'];
?>

<!-- sparsh body contents for php enhancement  -->
<div class="container">
  <hr>
  <br>
  <br>
  <br>
  </div>




   <?php
 include 'sidebar_page.php';
 ?>
















<div class="container" style="display: block;">

   <div class="row">
		<div class="col-md-8">
<h2>Semester 3</h2>
	 
	 <div class="table-responsive">
	<table id="dg" title="Semester 3" style="width:900px;height:500px"
			toolbar="#toolbar" pagination="true" idField="s_id"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
			
				<th ></th>
				<th ></th>
				<th colspan="2"><?php echo $s_sem3_sub1;  ?></th>
				<th colspan="2"><?php echo $s_sem3_sub2;  ?></th>
				<th colspan="2"><?php echo $s_sem3_sub3;  ?></th>
				<th colspan="2"><?php echo $s_sem3_sub4;  ?></th>
				<th colspan="2"><?php echo $s_sem3_sub5;  ?></th>
				<th colspan="2"><?php echo $s_sem3_sub6;  ?></th>	
			</tr>
			<tr>
				<th field="s_id" width="">ID</th>
				<th field="s_name" width="">Name</th>
				<th field="s_sem3_sub1_tt1" width="">TT 1</th>
				<th field="s_sem3_sub1_tt2" width="">TT 2</th>
				<th field="s_sem3_sub2_tt1" width="">TT 1</th>
				<th field="s_sem3_sub2_tt2" width="">TT 2</th>
				<th field="s_sem3_sub3_tt1" width="">TT 1</th>
				<th field="s_sem3_sub3_tt2" width="">TT 2</th>
				<th field="s_sem3_sub4_tt1" width="">TT 1</th>
				<th field="s_sem3_sub4_tt2" width="">TT 2</th>
				<th field="s_sem3_sub5_tt1" width="">TT 1</th>
				<th field="s_sem3_sub5_tt2" width="">TT 2</th>
				<th field="s_sem3_sub6_tt1" width="">TT 1</th>
				<th field="s_sem3_sub6_tt2" width="">TT 2</th>
				
			</tr>
		</thead>
	</table>
	
	<!--<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow')">Save</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancel</a>
	</div>-->
	
	</div>
	
	</div>
	

	<div class="col-md-2">
	
	
	
	<!--<table id="dg2" title="Teachers/Mentors List" style="width:350px;height:500px"
			 pagination="true" idField="f_id"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="f_id" width="50">ID</th>
				<th field="f_name" width="50">Name</th>
			</tr>
		</thead>
	</table>-->
	
	</div>
	</div>
 </div>

 </div>
 <br>

 <br>
 </div>
<!--/#footer-->

<?php
include 'swfooter.php';
?>
</body>
</html>
