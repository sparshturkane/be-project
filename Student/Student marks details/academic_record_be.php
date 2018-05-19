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
	$display_in_html = "SELECT s_sem7_pointer, s_sem7_seatno, s_sem7_yearop,s_sem7_lkt, s_sem8_pointer, s_sem8_seatno, s_sem8_yearop, s_sem8_lkt FROM academic_record WHERE s_id= '$s_id'";
	$result = mysqli_query($dbcon,$display_in_html);

	$print = mysqli_fetch_array($result,MYSQLI_ASSOC);
	//sem1
	$s_sem7_pointer		= $print['s_sem7_pointer'];
	$s_sem7_seatno		= $print['s_sem7_seatno'];
	$s_sem7_yearop		= $print['s_sem7_yearop'];
	$s_sem7_lkt			= $print['s_sem7_lkt'];
	
	//sem2
	$s_sem8_pointer		= $print['s_sem8_pointer'];
	$s_sem8_seatno		= $print['s_sem8_seatno'];
	$s_sem8_yearop		= $print['s_sem8_yearop'];
	$s_sem8_lkt			= $print['s_sem8_lkt'];
	
	
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
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		
	
		
		                 
		<form role="form" action="academic_record_be.php" method="POST"style="display: block;" data-pg-collapsed=""> 
				<h2>     B.E Academic Details </h2>
		
		
		
		
			<div class="col-md-7">
			<div class="well">
			<center><h3><b> Semister 7 </h3></center>
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SGPA:</label>                 
					<input type="text" class="form-control"  name="ssem1pointer" value="<?php echo $s_sem7_pointer;  ?>">                 
				</div> 

				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">Seat No:</label>                 
					<input type="text" class="form-control"  name="ssem1seatno" value="<?php echo $s_sem7_seatno; ?>">                 
				</div>	
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">Year of Passing:</label>                 
					<input type="text" class="form-control"  name="ssem1yearop" value="<?php echo $s_sem7_yearop; ?>">                 
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">No of live KT:</label>                 
					<input type="text" class="form-control"  name="ssem1lkt" value="<?php echo $s_sem7_lkt; ?>">                 
				</div>
				<br>
				<br>
				
			<center><h3><b> Semister 8 </h3></center>
			<br>
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SGPA:</label>                 
					<input type="text" class="form-control"  name="ssem2pointer" value="<?php echo $s_sem8_pointer;  ?>">                 
				</div> 

				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">Seat No:</label>                 
					<input type="text" class="form-control"  name="ssem2seatno" value="<?php echo $s_sem8_seatno; ?>">                 
				</div>	
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">Year of Passing:</label>                 
					<input type="text" class="form-control"  name="ssem2yearop" value="<?php echo $s_sem8_yearop; ?>">                 
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">No of live KT:</label>                 
					<input type="text" class="form-control"  name="ssem2lkt" value="<?php echo $s_sem8_lkt; ?>">                 
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
	$s_sem7_pointer		= $_POST['ssem1pointer'];
	$s_sem7_seatno		= $_POST['ssem1seatno'];
	$s_sem7_yearop		= $_POST['ssem1yearop'];
	$s_sem7_lkt			= $_POST['ssem1lkt'];
	
	
	//hsc details
	$s_sem8_pointer		= $_POST['ssem2pointer'];
	$s_sem8_seatno		= $_POST['ssem2seatno'];
	$s_sem8_yearop		= $_POST['ssem2yearop'];
	$s_sem8_lkt			= $_POST['ssem2lkt'];
	
	
	

	$update_student = "UPDATE academic_record SET s_sem7_pointer='$s_sem7_pointer', s_sem7_seatno='$s_sem7_seatno', s_sem7_yearop='$s_sem7_yearop',s_sem7_lkt='$s_sem7_lkt', s_sem8_pointer='$s_sem8_pointer', s_sem8_seatno='$s_sem8_seatno', s_sem8_yearop='$s_sem8_yearop',s_sem8_lkt='$s_sem8_lkt' WHERE s_id='$s_id'";
	if(mysqli_query($dbcon,$update_student)){
				
				echo"<script>window.open('academic_record_be.php','_self')</script>";
			
	}
	
	
	
	

}
	
?>
