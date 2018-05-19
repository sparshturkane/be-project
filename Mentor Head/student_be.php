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



	<h2>Student</h2>

 <div class="table-responsive">
	<table id="dg" title="Student" class="easyui-datagrid" style="width:700px;height:500px"
			url="get_student_be.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="s_id" width="40">ID</th>
				<th field="s_name" width="50">Student Name</th>
				<th field="s_branch" width="40">Branch</th>
				<th field="s_year" width="15">Year</th>
				<th field="f_id" width="40">Mentor ID</th>
				<th field="s_password" width="30">Password</th>
			</tr>
		</thead>
	</table>
	</div>
	<div id="toolbar">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">New Student</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Edit Student</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove Student</a>
	</div>

	<div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">User Information</div>
		<form id="fm" method="post" novalidate>
			<div class="fitem">
				<label>ID:</label>
				<input name="s_id" class="easyui-textbox" required="true">
			</div>
			<div class="fitem">
				<label>Student Name:</label>
				<input name="s_name" class="easyui-textbox" required="true">
			</div>
			<!--<div class="fitem">
				<label>Branch:</label>
				<input name="s_branch" class="easyui-textbox">
				<select class="easyui-combobox" style=""name="s_branch">
					<option value="Computer Engineering">Computer Engineering</option>
					<option value="Mechanical Engineering">Mechanical Engineering</option>
					<option value="Civil Engineering">Civil Engineering</option>
					<option value="EXTC Engineering">Extc Engineering</option>
					<option value="Electrical Engineering">Electrical Engineering</option>
				</select>
			</div>-->

			<div class="fitem">
				<label>Year:</label>
				<select class="easyui-combobox" style="" name="s_year" required="true">
					<option value="SE">SE</option>                         
					<option value="TE">TE</option>
					<option value="BE">BE</option>
				</select>
			</div>
			<div class="fitem">
				<label>Mentor ID:</label>
				<input name="f_id" class="easyui-textbox" >
			</div>
			<div class="fitem">
				<label>Password:</label>
				<input name="s_password" class="easyui-textbox" required="true">
			</div>
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
	</div>
	<script type="text/javascript">
		var url;
		function newUser(){
			$('#dlg').dialog('open').dialog('setTitle','New User');
			$('#fm').form('clear');
			url = 'save_student.php';
		}
		function editUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Edit User');
				$('#fm').form('load',row);
				url = 'update_student.php?id='+row.s_id;
			}
		}
		function saveUser(){
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.errorMsg){
						$.messager.show({
							title: 'Error',
							msg: result.errorMsg
						});
					} else {
						$('#dlg').dialog('close');		// close the dialog
						$('#dg').datagrid('reload');	// reload the user data
					}
				}
			});
		}
		function destroyUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to destroy this user?',function(r){
					if (r){
						$.post('destroy_student.php',{id:row.s_id},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.errorMsg
								});
							}
						},'json');
					}
				});
			}
		}
	</script>
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
		.fitem input{
			width:160px;
		}
	</style>
















 </div>


<div class = "col-md-2">
<h2>Teacher</h2>
 <div class="table-responsive">
<table id="dg2" title="Teachers/Mentors List" class="easyui-datagrid" style="width:350px;height:500px"
			 pagination="true" idField="f_id" url="get_assign_faculty_list.php"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="f_id" width="50">ID</th>
				<th field="f_name" width="50">Name</th>
			</tr>
		</thead>
	</table>
	</div>
</div>




























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
