<?php
session_start();

if(!$_SESSION['mid'])
{

   header("Location: ../home.php");//redirect to login page to secure the welcome page without login access.
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'swhead.php';
?>

<title>Search Student | mentor system</title>
	<link rel="stylesheet" type="text/css" href="themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="themes/icon.css">
	<link rel="stylesheet" type="text/css" href="themes/color.css">
	<link rel="stylesheet" type="text/css" href="demo/demo.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery.easyui.min.js"></script>
	<script type="text/javascript">
		function doSearch(){
			$('#tt').datagrid('load',{
				s_id: $('#s_id').val(),
				s_name: $('#s_name').val()
			});
		}
	</script>
</head><!--/head-->

<body class="homepage">

<?php
include 'swheader.php';
?>
<?php
echo $_SESSION['mid'];
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
     


	<h2>Search Student</h2>
	<div class="demo-info" style="margin-bottom:10px">
		<div class="demo-tip icon-tip">&nbsp;</div>
		<div></div>
	</div>
	 <div class="table-responsive">
	<table id="tt" class="easyui-datagrid" style="width:1000px;height:500px"
			url="get_search.php"
			title="Searching" iconCls="icon-search" toolbar="#tb"
			rownumbers="true" pagination="true">
		<thead>
			<tr>
				<th field="s_id" width="80">ID</th>
				<th field="s_name" width="300">Student Name</th>
				<th field="s_contact" width="100" align="right">Contact</th>
				<th field="s_branch" width="80" align="right">Branch</th>
				<th field="s_email" width="300">Email</th>
				<th field="s_year" width="50">Year</th>
			</tr>
		</thead>
	</table>
	<div>
	<div id="tb" style="padding:3px">
		<span>Student ID:</span>
		<input id="s_id" style="line-height:26px;border:1px solid #ccc">
		<span>Student Name:</span>
		<input id="s_name" style="line-height:26px;border:1px solid #ccc">
		<a href="#" class="easyui-linkbutton" plain="true" onclick="doSearch()">Search</a>
	</div>















   
 </div>

<!--second table can be inserted here if requrired-->

 </div>
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
