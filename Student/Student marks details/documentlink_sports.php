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
	//sport3

	$s_dlink_sport1		= $print['s_dlink_sport1'];
	$s_dlink_sport2		= $print['s_dlink_sport2'];
	$s_dlink_sport3		= $print['s_dlink_sport3'];


	//sport4
	$s_dlink_sport4	  	= $print['s_dlink_sport4'];
	$s_dlink_sport5		= $print['s_dlink_sport5'];
	$s_dlink_sport6		= $print['s_dlink_sport6'];
	$s_dlink_sport7		= $print['s_dlink_sport7'];
	$s_dlink_sport8		= $print['s_dlink_sport8'];
	$s_dlink_sport9		= $print['s_dlink_sport9'];
	$s_dlink_sport10	= $print['s_dlink_sport10'];



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


		<form role="form" action="documentlink_sports.php" method="POST"style="display: block;" data-pg-collapsed="">


			<div class="col-md-7">
			<div class="well">
			<h2>     Document Link </h2>


				<div class="form-group" style="display: block;">
					<label class="control-label" for="">sport 1:</label>
					<input type="text" class="form-control"  name="s_dlink_sport1" value="<?php echo $s_dlink_sport1; ?>">
				</div>

				<div class="form-group" style="display: block;">
					<label class="control-label" for="">sport 2:</label>
					<input type="text" class="form-control"  name="s_dlink_sport2" value="<?php echo $s_dlink_sport2; ?>">
				</div>

				<div class="form-group" style="display: block;">
					<label class="control-label" for="">sport 3:</label>
					<input type="text" class="form-control"  name="s_dlink_sport3" value="<?php echo $s_dlink_sport3; ?>">
				</div>

				<div class="form-group" style="display: block;">
					<label class="control-label" for="">sport 4:</label>
					<input type="text" class="form-control"  name="s_dlink_sport4" value="<?php echo $s_dlink_sport4;  ?>">
				</div>

				<div class="form-group" style="display: block;">
					<label class="control-label" for="">sport 5:</label>
					<input type="text" class="form-control"  name="s_dlink_sport5" value="<?php echo $s_dlink_sport5; ?>">
				</div>

				<div class="form-group" style="display: block;">
					<label class="control-label" for="">sport 6:</label>
					<input type="text" class="form-control"  name="s_dlink_sport6" value="<?php echo $s_dlink_sport6; ?>">
				</div>

				<div class="form-group" style="display: block;">
					<label class="control-label" for="">sport 7:</label>
					<input type="text" class="form-control"  name="s_dlink_sport7" value="<?php echo $s_dlink_sport7; ?>">
				</div>

				<div class="form-group" style="display: block;">
					<label class="control-label" for="">sport 8:</label>
					<input type="text" class="form-control"  name="s_dlink_sport8" value="<?php echo $s_dlink_sport8; ?>">
				</div>
				<div class="form-group" style="display: block;">
					<label class="control-label" for="">sport 9:</label>
					<input type="text" class="form-control"  name="s_dlink_sport9" value="<?php echo $s_dlink_sport9;  ?>">
				</div>

				<div class="form-group" style="display: block;">
					<label class="control-label" for="">sport 10:</label>
					<input type="text" class="form-control"  name="s_dlink_sport10" value="<?php echo $s_dlink_sport10; ?>">
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

	//sport3 details


	$s_dlink_sport1		= $_POST['s_dlink_sport1'];
	$s_dlink_sport2		= $_POST['s_dlink_sport2'];
	$s_dlink_sport3		= $_POST['s_dlink_sport3'];


	//sport4 details


	$s_dlink_sport4	  	= $_POST['s_dlink_sport4'];
	$s_dlink_sport5		= $_POST['s_dlink_sport5'];
	$s_dlink_sport6		= $_POST['s_dlink_sport6'];
	$s_dlink_sport7		= $_POST['s_dlink_sport7'];
	$s_dlink_sport8		= $_POST['s_dlink_sport8'];
	$s_dlink_sport9		= $_POST['s_dlink_sport9'];
	$s_dlink_sport10	= $_POST['s_dlink_sport10'];




	$update_student = "UPDATE document_link
												SET

												s_dlink_sport1='$s_dlink_sport1',
												s_dlink_sport2='$s_dlink_sport2',
												s_dlink_sport3='$s_dlink_sport3',
												s_dlink_sport4='$s_dlink_sport4',
												s_dlink_sport5='$s_dlink_sport5',
												s_dlink_sport6='$s_dlink_sport6',
												s_dlink_sport7='$s_dlink_sport7',
												s_dlink_sport8='$s_dlink_sport8',
												s_dlink_sport9='$s_dlink_sport9',
												s_dlink_sport10='$s_dlink_sport10'
												WHERE s_id='$s_id'";
	if(mysqli_query($dbcon,$update_student)){

				echo"<script>window.open('documentlink_sports.php','_self')</script>";

	}





}

?>
