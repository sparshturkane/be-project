 <?php
session_start();

if(!$_SESSION['sid'])
{

    header("Location: ../../home.php");//redirect to login page to secure the welcome page without login access.
}

?>


<?php	
	
	include("../db_connection.php");
	// for god sake sparsh don't do isset we will do it in the end of this page 
	
	$s_id = $_SESSION['sid'];
	//other
	$display_in_html = "SELECT s_sem5_pointer, s_sem5_seatno, s_sem5_yearop,s_sem5_lkt, s_sem6_pointer, s_sem6_seatno, s_sem6_yearop, s_sem6_lkt FROM academic_record WHERE s_id= '$s_id'";
	$result = mysqli_query($dbcon,$display_in_html);

	$print = mysqli_fetch_array($result,MYSQLI_ASSOC);
	//sem1
	$s_sem5_pointer		= $print['s_sem5_pointer'];
	$s_sem5_seatno		= $print['s_sem5_seatno'];
	$s_sem5_yearop		= $print['s_sem5_yearop'];
	$s_sem5_lkt			= $print['s_sem5_lkt'];
	
	//sem2
	$s_sem6_pointer		= $print['s_sem6_pointer'];
	$s_sem6_seatno		= $print['s_sem6_seatno'];
	$s_sem6_yearop		= $print['s_sem6_yearop'];
	$s_sem6_lkt			= $print['s_sem6_lkt'];
	
	
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
		<div class="col-md-5"> </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		
	
		
		                 
		<form role="form" action="academic_record_te.php" method="POST"style="display: block;" data-pg-collapsed=""> 
				<h2>     T.E Academic Details </h2>
		
		
		
		
			<div class="col-md-7">
			<div class="well">
			<center><h3><b> Semister 5 </h3></center>
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SGPA:</label>                 
					<input type="text" class="form-control"  name="ssem1pointer" value="<?php echo $s_sem5_pointer;  ?>">                 
				</div> 

				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">Seat No:</label>                 
					<input type="text" class="form-control"  name="ssem1seatno" value="<?php echo $s_sem5_seatno; ?>">                 
				</div>	
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">Year of Passing:</label>                 
					<input type="text" class="form-control"  name="ssem1yearop" value="<?php echo $s_sem5_yearop; ?>">                 
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">No of live KT:</label>                 
					<input type="text" class="form-control"  name="ssem1lkt" value="<?php echo $s_sem5_lkt; ?>">                 
				</div>
				<br>
				<br>
				
			<center><h3><b> Semister 6 </h3></center>
			<br>
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SGPA:</label>                 
					<input type="text" class="form-control"  name="ssem2pointer" value="<?php echo $s_sem6_pointer;  ?>">                 
				</div> 

				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">Seat No:</label>                 
					<input type="text" class="form-control"  name="ssem2seatno" value="<?php echo $s_sem6_seatno; ?>">                 
				</div>	
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">Year of Passing:</label>                 
					<input type="text" class="form-control"  name="ssem2yearop" value="<?php echo $s_sem6_yearop; ?>">                 
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">No of live KT:</label>                 
					<input type="text" class="form-control"  name="ssem2lkt" value="<?php echo $s_sem6_lkt; ?>">                 
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
	
	//ssc details
	$s_sem5_pointer		= $_POST['ssem1pointer'];
	$s_sem5_seatno		= $_POST['ssem1seatno'];
	$s_sem5_yearop		= $_POST['ssem1yearop'];
	$s_sem5_lkt			= $_POST['ssem1lkt'];
	
	
	//hsc details
	$s_sem6_pointer		= $_POST['ssem2pointer'];
	$s_sem6_seatno		= $_POST['ssem2seatno'];
	$s_sem6_yearop		= $_POST['ssem2yearop'];
	$s_sem6_lkt			= $_POST['ssem2lkt'];
	
	
	

	$update_student = "UPDATE academic_record SET s_sem5_pointer='$s_sem5_pointer', s_sem5_seatno='$s_sem5_seatno', s_sem5_yearop='$s_sem5_yearop',s_sem5_lkt='$s_sem5_lkt', s_sem6_pointer='$s_sem6_pointer', s_sem6_seatno='$s_sem6_seatno', s_sem6_yearop='$s_sem6_yearop',s_sem6_lkt='$s_sem6_lkt' WHERE s_id='$s_id'";
	if(mysqli_query($dbcon,$update_student)){
				
				echo"<script>window.open('academic_record_te.php','_self')</script>";
			
	}
	
	
	
	

}
	
?>
