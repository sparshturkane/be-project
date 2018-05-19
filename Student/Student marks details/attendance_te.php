 <?php
session_start();

if(!$_SESSION['sid'])
{

    header("Location: ../../home.php");//redirect to login page to secure the welcome page without login access.
}

?>


<?php
	include("../db_connection.php");
	$s_id = $_SESSION['sid'];
	//other
	$display_in_html = "SELECT s_sem5_july, s_sem5_aug, s_sem5_sept, s_sem5_oct, s_sem5_nov, s_sem6_jan,s_sem6_feb,s_sem6_mar, s_sem6_april,s_sem6_may FROM attendance WHERE s_id= '$s_id'";
	$result = mysqli_query($dbcon,$display_in_html);

	$print = mysqli_fetch_array($result,MYSQLI_ASSOC);
	//sem3
	$s_sem5_july	= $print['s_sem5_july'];
	$s_sem5_aug		= $print['s_sem5_aug'];
	$s_sem5_sept	= $print['s_sem5_sept'];
	$s_sem5_oct		= $print['s_sem5_oct'];
	$s_sem5_nov		= $print['s_sem5_nov'];

	
	//sem4
	$s_sem6_jan	  	= $print['s_sem6_jan'];
	$s_sem6_feb		= $print['s_sem6_feb'];
	$s_sem6_mar		= $print['s_sem6_mar'];
	$s_sem6_april	= $print['s_sem6_april'];
	$s_sem6_may		= $print['s_sem6_may'];

	
	
	
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
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		
	
		
		                 
		<form role="form" action="attendance_te.php" method="POST"style="display: block;" data-pg-collapsed=""> 
				<h2>     T.E Attendance Details </h2>
		
		
		
		
			<div class="col-md-7">
			<div class="well">
			<center><h3><b> Semister 5 </h3></center>
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">July:</label>                 
					<input type="text" class="form-control"  name="ssem3july" value="<?php echo $s_sem5_july;  ?>">                 
				</div> 

				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">August:</label>                 
					<input type="text" class="form-control"  name="ssem3aug" value="<?php echo $s_sem5_aug; ?>">                 
				</div>	
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">September:</label>                 
					<input type="text" class="form-control"  name="ssem3sept" value="<?php echo $s_sem5_sept; ?>">                 
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">october:</label>                 
					<input type="text" class="form-control"  name="ssem3oct" value="<?php echo $s_sem5_oct; ?>">                 
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">November:</label>                 
					<input type="text" class="form-control"  name="ssem3nov" value="<?php echo $s_sem5_nov; ?>">                 
				</div>
				<br>
				<br>
				
			<center><h3><b> Semister 6 </h3></center>
			<br>
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">Janvuary:</label>                 
					<input type="text" class="form-control"  name="ssem4jan" value="<?php echo $s_sem6_jan;  ?>">                 
				</div> 

				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">February:</label>                 
					<input type="text" class="form-control"  name="ssem4feb" value="<?php echo $s_sem6_feb; ?>">                 
				</div>	
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">March:</label>                 
					<input type="text" class="form-control"  name="ssem4mar" value="<?php echo $s_sem6_mar; ?>">                 
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">April:</label>                 
					<input type="text" class="form-control"  name="ssem4april" value="<?php echo $s_sem6_april; ?>">                 
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">May:</label>                 
					<input type="text" class="form-control"  name="ssem4may" value="<?php echo $s_sem6_may; ?>">                 
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

	$s_sem5_july	= $_POST['ssem3july'];
	$s_sem5_aug		= $_POST['ssem3aug'];
	$s_sem5_sept	= $_POST['ssem3sept'];
	$s_sem5_oct		= $_POST['ssem3oct'];
	$s_sem5_nov		= $_POST['ssem3nov'];
	
	
	//sem4 details


	$s_sem6_jan	  	= $_POST['ssem4jan'];
	$s_sem6_feb		= $_POST['ssem4feb'];
	$s_sem6_mar		= $_POST['ssem4mar'];
	$s_sem6_april	= $_POST['ssem4april'];
	$s_sem6_may		= $_POST['ssem4may'];

	
	

	$update_student = "UPDATE attendance SET s_sem5_july='$s_sem5_july', s_sem5_aug='$s_sem5_aug', s_sem5_sept='$s_sem5_sept', s_sem5_oct='$s_sem5_oct', s_sem5_nov='$s_sem5_nov', s_sem6_jan='$s_sem6_jan',s_sem6_feb='$s_sem6_feb',s_sem6_mar='$s_sem6_mar',s_sem6_april='$s_sem6_april',s_sem6_may='$s_sem6_may' WHERE s_id='$s_id'";
	if(mysqli_query($dbcon,$update_student)){
				
				echo"<script>window.open('attendance_te.php','_self')</script>";
			
	}
	
	
	
	

}
	
?>



























