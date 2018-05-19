<?php
session_start();

if(!$_SESSION['fid'])
{

   header("Location: ../../home.php");//redirect to login page to secure the welcome page without login access.
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'swhead.php';
?>

<title>Sports Document | mentor system</title>
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
				url: 'get_document.php',
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
<h2>Document Sports</h2>
	
	<div class="table-responsive">
	<table id="dg" title="Student List" style="width:1000px;height:500px"
			toolbar="#toolbar" pagination="true" idField="s_id"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="s_id" width="30">ID</th>
				<th field="s_name" width="50">Name</th>
				<th field="s_dlink_sport1" width="30">1</th>
				<th field="s_dlink_sport2" width="30">2</th>
				<th field="s_dlink_sport3" width="30">3</th>
				<th field="s_dlink_sport4" width="30">4</th>
				<th field="s_dlink_sport5" width="30">5</th>
				<th field="s_dlink_sport6" width="30">6</th>
				<th field="s_dlink_sport7" width="30">7</th>
				<th field="s_dlink_sport8" width="30">8</th>
				<th field="s_dlink_sport9" width="30">9</th>
				<th field="s_dlink_sport10" width="30">10</th>
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
