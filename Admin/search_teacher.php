<?php
session_start();

if(!$_SESSION['aid'])
{

   header("Location: ../../home.php");//redirect to login page to secure the welcome page without login access.
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'swhead.php';
?>

<title>Search Teacher | mentor system</title>
	<link rel="stylesheet" type="text/css" href="themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="themes/icon.css">
	<link rel="stylesheet" type="text/css" href="themes/color.css">
	<link rel="stylesheet" type="text/css" href="demo/demo.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery.easyui.min.js"></script>
	<script type="text/javascript">
		function doSearch(){
			$('#tt').datagrid('load',{
				f_id: $('#f_id').val(),
				f_name: $('#f_name').val()
			});
		}
	</script>
</head><!--/head-->

<body class="homepage">

<?php
include 'swheader.php';
?>
<?php
echo $_SESSION['aid'];
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
     


	<h2>Search Teacher</h2>
	<div class="demo-info" style="margin-bottom:10px">
		<div class="demo-tip icon-tip">&nbsp;</div>
		<div></div>
	</div>
 <div class="table-responsive">
	<table id="tt" class="easyui-datagrid" style="width:1000px;height:500px"
			url="get_search_teacher.php"
			title="Searching" iconCls="icon-search" toolbar="#tb"
			rownumbers="true" pagination="true">
		<thead>
			<tr>
				<th field="f_id" width="80">ID</th>
				<th field="f_name" width="300">Teacher Name</th>
				<th field="f_contact" width="100" align="right">Contact</th>
				<th field="f_branch" width="100" align="right">Branch</th>
				<th field="f_email" width="300">Email</th>
			</tr>
		</thead>
	</table>
	</div>
	<div id="tb" style="padding:3px">
		<span>Teacher ID:</span>
		<input id="f_id" style="line-height:26px;border:1px solid #ccc">
		<span>Teacher Name:</span>
		<input id="f_name" style="line-height:26px;border:1px solid #ccc">
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

<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <b><div class="col-sm-6">
                   A MSN (Manoj Sparsh Neel) production.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="../home.php">Home</a></li>
                        <li><a href="../aboutus.php">About Us</a></li>
                        <li><a href="../contactus.php">Contact Us</a></li>
                    </ul></b>
                </div>
            </div>
        </div>
</footer><!--/#footer-->
<!--<script src="js/jquery.js"></script>-->
   <!-- <script src="js/bootstrap.min.js"></script>-->
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>
</body>
</html>
