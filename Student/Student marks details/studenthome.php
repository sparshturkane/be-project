 <?php
session_start();

if(!$_SESSION['sid'])
{

    header("Location: ../../home.php");//redirect to login page to secure the welcome page without login access.
}

?>

<?php

?>
<?php
	$s_id = $_SESSION['sid'];
	//connection with database
	include("../db_connection.php");
	
	//-----------------------------
	//connection to TABLE: student
	//-----------------------------
	$display_student = "SELECT s_id, s_name, s_branch, s_address, s_email, s_contact FROM student WHERE s_id= '$s_id'";
	$result 		= mysqli_query($dbcon,$display_student);

	$print 			= mysqli_fetch_array($result,MYSQLI_ASSOC);
	$s_name 		= $print['s_name'];
	$s_branch		= $print['s_branch'];
	$s_address		= $print['s_address'];
	$s_email	  	= $print['s_email'];
	$s_contact		= $print['s_contact'];
	mysqli_free_result($result);
	
	//--------------------------------
	//connection to TABLE: s_profile
	//--------------------------------
	$display_s_profile  = "SELECT s_year, s_yoa, s_gname, s_goccupation, s_gcontact FROM s_profile WHERE s_id= '$s_id'";
	$result2 		= mysqli_query($dbcon,$display_s_profile);
	$print2 		= mysqli_fetch_array($result2,MYSQLI_ASSOC);
	$s_year 		= $print2['s_year'];
	$s_yoa			= $print2['s_yoa'];
	$s_gname		= $print2['s_gname'];
	$s_goccupation	= $print2['s_goccupation'];
	$s_gcontact		= $print2['s_gcontact'];
	mysqli_free_result($result2);
	

	
	
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
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		
	
		
		                 <h2>   Personal Details</h2>
		
		
		
		
			<div class="col-md-7">
			<div class="well">
			<form role="form" action="studenthome.php" method="POST"style="display: block;" data-pg-collapsed=""> 
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">Name:</label>                 
					<input type="text" class="form-control"  name="sname" value="<?php echo $s_name;  ?>">                 
				</div> 

					

				<div class="form-group" style="display: block;" data-pg-collapsed=""> 
					<label class="control-label" for="">Branch:</label>                 
					<select class="form-control" style="display: block;"name="sbranch" > 
						<option><?php echo $s_branch;?></option>
							<option value="Computer Engineering">Computer Engineering</option>                         
							<option value="Mechanical Engineering">Mechanical Engineering</option>                         
							<option value="Civil Engineering">Civil Engineering</option>
							<option value="EXTC Engineering">Extc Engineering</option>                         
							<option value="Electrical Engineering">Electrical Engineering</option>                         	
					</select>                   
				</div>
				
				<div class="form-group" style="display: block;" data-pg-collapsed=""> 
					<label class="control-label" for="">Year:</label>                 
					<select class="form-control" style="display: block;"name="syear" > 
						<option><?php echo $s_year;?></option>
						<option value="FE">F.E</option>                         
						<option value="SE">S.E</option>                         
						<option value="TE">T.E</option>
						<option value="BE">B.E</option> 
						                         	
					</select>                            
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">Address:</label>                 
					<input type="text" class="form-control" name="saddress" value="<?php echo $s_address; ?>">                 
				</div>      
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">Year of Addmission:</label>                 
					<input type="text" class="form-control" name="syoa" value="<?php echo $s_yoa; ?>">                 
				</div>      
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="exampleInputPassword1">Email ID:</label>                 
					<input type="text" class="form-control" name="semail" value="<?php echo $s_email;  ?>">                 
				</div>             
				<!--<div class="form-group" style="display: block;"> </div>             
				<div class="checkbox" style="display: block;"> </div>-->             
			
			 
				<div class="form-group" style="display: block;" data-pg-collapsed=""> 
					<label class="control-label" for="">Contact No.:</label>                 
					<input type="number" maxlength="10" class="form-control" name="scontact" value="<?php echo $s_contact; ?>">                  
				</div>  
				
				
				
				

				<div class="form-group" style="display: block;" data-pg-collapsed=""> 
					<label class="control-label" for="">Guardian's name:</label>                 
					<input type="text" class="form-control" name="sgname" value="<?php echo $s_gname; ?>">                  
				</div>
				
				<div class="form-group" style="display: block;" data-pg-collapsed=""> 
					<label class="control-label" for="">Guardian's Occupation:</label>                 
					<input type="text" class="form-control" name="sgoccupation" value="<?php echo $s_goccupation; ?>">                  
				</div>
				
				<div class="form-group" style="display: block;" data-pg-collapsed=""> 
					<label class="control-label" for="">Guardian Contact No.:</label>                 
					<input type="number" maxlength="10" class="form-control" name="sgcontact" value="<?php echo $s_gcontact; ?>">                  
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
	
	$s_branch		= $_POST['sbranch'];
	$s_year			= $_POST['syear'];
	$s_address		= $_POST['saddress'];
	$s_yoa			= $_POST['syoa'];
	$s_email		= $_POST['semail'];
	$s_contact		= $_POST['scontact'];
	$s_gname		= $_POST['sgname'];
	$s_goccupation	= $_POST['sgoccupation'];
	$s_gcontact		= $_POST['sgcontact'];
	
	$update_student = "UPDATE student SET  s_branch='$s_branch', s_address='$s_address', s_email='$s_email', s_contact='$s_contact' WHERE s_id='$s_id'";
	if(mysqli_query($dbcon,$update_student)){
				$update_s_profile = "UPDATE s_profile SET s_year='$s_year', s_yoa='$s_yoa', s_gname='$s_gname', s_goccupation='$s_goccupation', s_gcontact='$s_gcontact',s_branch='$s_branch'  WHERE s_id='$s_id'";
				mysqli_query($dbcon,$update_s_profile);
				echo"<script>window.open('studenthome.php','_self')</script>";
			
	}
	
	
	
	

}
	
?>



























