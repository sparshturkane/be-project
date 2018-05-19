 <?php
session_start();

if(!$_SESSION['sid'])
{

    header("Location: ../../home.php");//redirect to login page to secure the welcome page without login access.
}

?>

?>
<?php
 //The code to retrive data from database which user have already entered during registeration will be directly displayed in the form.
 include("../db_connection.php");
 // for god sake sparsh don't do isset we will do it in the end of this page

 $s_id = $_SESSION['sid'];

 $fetch_branch_year = "SELECT s_id, s_branch FROM student WHERE s_id='$s_id' ";
 $result_branch_year = mysqli_query($dbcon,$fetch_branch_year);

 $get_branch_year = mysqli_fetch_array($result_branch_year,MYSQLI_ASSOC);
 $s_branch	= $get_branch_year['s_branch'];
 mysqli_free_result($result_branch_year);

?>
<?php
	//other
	$display_in_html = "SELECT * FROM document_link WHERE s_id= '$s_id'";
	$result = mysqli_query($dbcon,$display_in_html);

	$print = mysqli_fetch_array($result,MYSQLI_ASSOC);
	//acad3

	$s_dlink_acad1		= $print['s_dlink_acad1'];
	$s_dlink_acad2		= $print['s_dlink_acad2'];
	$s_dlink_acad3		= $print['s_dlink_acad3'];


	//acad4
	$s_dlink_acad4	  	= $print['s_dlink_acad4'];
	$s_dlink_acad5		= $print['s_dlink_acad5'];
	$s_dlink_acad6		= $print['s_dlink_acad6'];
	$s_dlink_acad7		= $print['s_dlink_acad7'];
	$s_dlink_acad8		= $print['s_dlink_acad8'];
	$s_dlink_acad9		= $print['s_dlink_acad9'];
	$s_dlink_acad10	= $print['s_dlink_acad10'];



	mysqli_free_result($result);




?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'swhead.php';
?>

<title>Student Home | mentor system</title>
</head><!--/head-->

<body class="homepage">

<?php
include 'swheader.php';
?>
<?php
echo $_SESSION['sid'];
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


		<form role="form" action="documentlink_academic.php" method="POST"style="display: block;" data-pg-collapsed="">


			<div class="col-md-7">
			<div class="well">
			<h2>     Document Link </h2>


				<div class="form-group" style="display: block;">
					<label class="control-label" for="">academic 1:</label>
					<input type="text" class="form-control"  name="s_dlink_acad1" value="<?php echo $s_dlink_acad1; ?>">
				</div>

				<div class="form-group" style="display: block;">
					<label class="control-label" for="">academic 2:</label>
					<input type="text" class="form-control"  name="s_dlink_acad2" value="<?php echo $s_dlink_acad2; ?>">
				</div>

				<div class="form-group" style="display: block;">
					<label class="control-label" for="">academic 3:</label>
					<input type="text" class="form-control"  name="s_dlink_acad3" value="<?php echo $s_dlink_acad3; ?>">
				</div>

				<div class="form-group" style="display: block;">
					<label class="control-label" for="">academic 4:</label>
					<input type="text" class="form-control"  name="s_dlink_acad4" value="<?php echo $s_dlink_acad4;  ?>">
				</div>

				<div class="form-group" style="display: block;">
					<label class="control-label" for="">academic 5:</label>
					<input type="text" class="form-control"  name="s_dlink_acad5" value="<?php echo $s_dlink_acad5; ?>">
				</div>

				<div class="form-group" style="display: block;">
					<label class="control-label" for="">academic 6:</label>
					<input type="text" class="form-control"  name="s_dlink_acad6" value="<?php echo $s_dlink_acad6; ?>">
				</div>

				<div class="form-group" style="display: block;">
					<label class="control-label" for="">academic 7:</label>
					<input type="text" class="form-control"  name="s_dlink_acad7" value="<?php echo $s_dlink_acad7; ?>">
				</div>

				<div class="form-group" style="display: block;">
					<label class="control-label" for="">academic 8:</label>
					<input type="text" class="form-control"  name="s_dlink_acad8" value="<?php echo $s_dlink_acad8; ?>">
				</div>
				<div class="form-group" style="display: block;">
					<label class="control-label" for="">academic 9:</label>
					<input type="text" class="form-control"  name="s_dlink_acad9" value="<?php echo $s_dlink_acad9;  ?>">
				</div>

				<div class="form-group" style="display: block;">
					<label class="control-label" for="">academic 10:</label>
					<input type="text" class="form-control"  name="s_dlink_acad10" value="<?php echo $s_dlink_acad10; ?>">
				</div>




				<div class="form-group" style="display: block;"> </div>
				<div class="form-group" style="display: block;"> </div>
				<div class="checkbox" style="display: block;"> </div>





			<div class="form-group" style="display: block;"> </div>
			<div class="form-group" style="display: block;"> </div>
			<center><input class="btn btn-primary btn-lg btn-block" type="submit" value="Save/Update" name="formbutton1" >
					  </center>

		</form>
    </div>
	</div>































	</div>
	</div>




























	</div>
	</div>

	</div>
	<br>

	<br>

<?php
include 'swfooter.php';
?>
</body>
</html>



<?php
include("../db_connection.php");//make connection here

if(isset($_POST['formbutton1']))
{
	//$s_name 		= $_POST[''];

	//acad3 details


	$s_dlink_acad1		= $_POST['s_dlink_acad1'];
	$s_dlink_acad2		= $_POST['s_dlink_acad2'];
	$s_dlink_acad3		= $_POST['s_dlink_acad3'];


	//acad4 details


	$s_dlink_acad4	  	= $_POST['s_dlink_acad4'];
	$s_dlink_acad5		= $_POST['s_dlink_acad5'];
	$s_dlink_acad6		= $_POST['s_dlink_acad6'];
	$s_dlink_acad7		= $_POST['s_dlink_acad7'];
	$s_dlink_acad8		= $_POST['s_dlink_acad8'];
	$s_dlink_acad9		= $_POST['s_dlink_acad9'];
	$s_dlink_acad10	= $_POST['s_dlink_acad10'];




	$update_student = "UPDATE document_link
												SET

												s_dlink_acad1='$s_dlink_acad1',
												s_dlink_acad2='$s_dlink_acad2',
												s_dlink_acad3='$s_dlink_acad3',
												s_dlink_acad4='$s_dlink_acad4',
												s_dlink_acad5='$s_dlink_acad5',
												s_dlink_acad6='$s_dlink_acad6',
												s_dlink_acad7='$s_dlink_acad7',
												s_dlink_acad8='$s_dlink_acad8',
												s_dlink_acad9='$s_dlink_acad9',
												s_dlink_acad10='$s_dlink_acad10'
												WHERE s_id='$s_id'";
	if(mysqli_query($dbcon,$update_student)){

				echo"<script>window.open('documentlink_academic.php','_self')</script>";

	}





}

?>
