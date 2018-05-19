 <?php
session_start();

if(!$_SESSION['sid'])
{

    header("Location: ../../home.php");//redirect to login page to secure the welcome page without login access.
}

?>


<?php
	$s_id = $_SESSION['sid'];
	include("../db_connection.php");
	//echo $s_id;
	//other
	$display_in_html = "SELECT s_id, s_ssc_tmarks, s_ssc_board, s_ssc_percentage, s_ssc_yearop, s_hsc_tmarks, s_hsc_board, s_hsc_percentage, s_hsc_yearop FROM academic_record WHERE s_id= '$s_id'";
	$result 		 = mysqli_query($dbcon,$display_in_html) or trigger_error(mysql_error().$display_in_html);
	$print = mysqli_fetch_array($result,MYSQLI_ASSOC);
	//ssc details
	$s_ssc_tmarks		= $print['s_ssc_tmarks'];
	$s_ssc_board		= $print['s_ssc_board'];
	$s_ssc_percentage	= $print['s_ssc_percentage'];
	$s_ssc_yearop		= $print['s_ssc_yearop'];
	
	//hsc details
	$s_hsc_tmarks		= $print['s_hsc_tmarks'];
	$s_hsc_board		= $print['s_hsc_board'];
	$s_hsc_percentage	= $print['s_hsc_percentage'];
	$s_hsc_yearop		= $print['s_hsc_yearop'];
	
	
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
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		
	
		
		                 <h2>   SSC & HSC Details</h2>
		
		
		
		
			<div class="col-md-7">
			<div class="well">
		<form role="form" action="academic_record_sschsc.php" method="POST"style="display: block;" data-pg-collapsed=""> 
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SSC Total Marks:</label>                 
					<input type="text" class="form-control"  name="sssctmarks" value="<?php echo $s_ssc_tmarks;  ?>">                 
				</div> 

				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SSC Board/University:</label>                 
					<input type="text" class="form-control"  name="ssscboard" value="<?php echo $s_ssc_board; ?>">                 
				</div>	
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SSC Percentage:</label>                 
					<input type="text" class="form-control"  name="ssscpercentage" value="<?php echo $s_ssc_percentage; ?>">                 
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">SSC Year of Passing:</label>                 
					<input type="text" class="form-control"  name="ssscyearop" value="<?php echo $s_ssc_yearop; ?>">                 
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">HSC Total Marks:</label>                 
					<input type="text" class="form-control"  name="shsctmarks" value="<?php echo $s_hsc_tmarks;  ?>">                 
				</div> 

				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">HSC Board/University:</label>                 
					<input type="text" class="form-control"  name="shscboard" value="<?php echo $s_hsc_board; ?>">                 
				</div>	
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">HSC Percentage:</label>                 
					<input type="text" class="form-control"  name="shscpercentage" value="<?php echo $s_hsc_percentage; ?>">                 
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">HSC Year of Passing:</label>                 
					<input type="text" class="form-control"  name="shscyearop" value="<?php echo $s_hsc_yearop; ?>">                 
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
	$s_ssc_tmarks		= $_POST['sssctmarks'];
	$s_ssc_board		= $_POST['ssscboard'];
	$s_ssc_percentage	= $_POST['ssscpercentage'];
	$s_ssc_yearop		= $_POST['ssscyearop'];
	
	//hsc details
	$s_hsc_tmarks		= $_POST['shsctmarks'];
	$s_hsc_board		= $_POST['shscboard'];
	$s_hsc_percentage	= $_POST['shscpercentage'];
	$s_hsc_yearop		= $_POST['shscyearop'];
	
	

	$update_student = "UPDATE academic_record SET s_ssc_tmarks='$s_ssc_tmarks', s_ssc_board='$s_ssc_board', s_ssc_percentage='$s_ssc_percentage', s_ssc_yearop='$s_ssc_yearop', s_hsc_tmarks='$s_hsc_tmarks', s_hsc_board='$s_hsc_board', s_hsc_percentage='$s_hsc_percentage', s_hsc_yearop='$s_hsc_yearop' WHERE s_id='$s_id'";
	if(mysqli_query($dbcon,$update_student)){
				
				echo"<script>window.open('academic_record_sschsc.php','_self')</script>";
			
	}
	
	
	
	

}
	
?>



























