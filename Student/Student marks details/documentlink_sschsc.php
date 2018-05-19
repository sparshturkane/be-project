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
	//sem3
	$s_dlink_ssc		= $print['s_dlink_ssc'];
	$s_dlink_hsc		= $print['s_dlink_hsc'];
	$s_dlink_sem1		= $print['s_dlink_sem1'];
	$s_dlink_sem2		= $print['s_dlink_sem2'];
	$s_dlink_sem3		= $print['s_dlink_sem3'];

	
	//sem4
	$s_dlink_sem4	  	= $print['s_dlink_sem4'];
	$s_dlink_sem5		= $print['s_dlink_sem5'];
	$s_dlink_sem6		= $print['s_dlink_sem6'];
	$s_dlink_sem7		= $print['s_dlink_sem7'];
	$s_dlink_sem8		= $print['s_dlink_sem8'];


	
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
	
	       
		<form role="form" action="documentlink_sschsc.php" method="POST"style="display: block;" data-pg-collapsed=""> 
				

			<div class="col-md-7">
			<div class="well">
			<h2>     Document Link </h2>
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SSC:</label>                 
					<input type="text" class="form-control"  name="s_dlink_ssc" value="<?php echo $s_dlink_ssc;  ?>">                 
				</div> 

				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">HSC:</label>                 
					<input type="text" class="form-control"  name="s_dlink_hsc" value="<?php echo $s_dlink_hsc; ?>">                 
				</div>	
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SEM 1:</label>                 
					<input type="text" class="form-control"  name="s_dlink_sem1" value="<?php echo $s_dlink_sem1; ?>">                 
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SEM 2:</label>                 
					<input type="text" class="form-control"  name="s_dlink_sem2" value="<?php echo $s_dlink_sem2; ?>">                 
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SEM 3:</label>                 
					<input type="text" class="form-control"  name="s_dlink_sem3" value="<?php echo $s_dlink_sem3; ?>">                 
				</div>
			
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SEM 4:</label>                 
					<input type="text" class="form-control"  name="s_dlink_sem4" value="<?php echo $s_dlink_sem4;  ?>">                 
				</div> 

				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SEM 5:</label>                 
					<input type="text" class="form-control"  name="s_dlink_sem5" value="<?php echo $s_dlink_sem5; ?>">                 
				</div>	
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SEM 6:</label>                 
					<input type="text" class="form-control"  name="s_dlink_sem6" value="<?php echo $s_dlink_sem6; ?>">                 
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SEM 7:</label>                 
					<input type="text" class="form-control"  name="s_dlink_sem7" value="<?php echo $s_dlink_sem7; ?>">                 
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SEM 8:</label>                 
					<input type="text" class="form-control"  name="s_dlink_sem8" value="<?php echo $s_dlink_sem8; ?>">                 
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
	
	//sem3 details

	$s_dlink_ssc		= $_POST['s_dlink_ssc'];
	$s_dlink_hsc		= $_POST['s_dlink_hsc'];
	$s_dlink_sem1		= $_POST['s_dlink_sem1'];
	$s_dlink_sem2		= $_POST['s_dlink_sem2'];
	$s_dlink_sem3		= $_POST['s_dlink_sem3'];
	
	
	//sem4 details


	$s_dlink_sem4	  	= $_POST['s_dlink_sem4'];
	$s_dlink_sem5		= $_POST['s_dlink_sem5'];
	$s_dlink_sem6		= $_POST['s_dlink_sem6'];
	$s_dlink_sem7		= $_POST['s_dlink_sem7'];
	$s_dlink_sem8		= $_POST['s_dlink_sem8'];

	
	

	$update_student = "UPDATE document_link 
												SET 
												s_dlink_ssc='$s_dlink_ssc', 
												s_dlink_hsc='$s_dlink_hsc', 
												s_dlink_sem1='$s_dlink_sem1', 
												s_dlink_sem2='$s_dlink_sem2', 
												s_dlink_sem3='$s_dlink_sem3', 
												s_dlink_sem4='$s_dlink_sem4',
												s_dlink_sem5='$s_dlink_sem5',
												s_dlink_sem6='$s_dlink_sem6',
												s_dlink_sem7='$s_dlink_sem7',
												s_dlink_sem8='$s_dlink_sem8' 
												WHERE s_id='$s_id'";
	if(mysqli_query($dbcon,$update_student)){
				
				echo"<script>window.open('documentlink_sschsc.php','_self')</script>";
			
	}
	
	
	
	

}
	
?>



























