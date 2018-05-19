 <?php
session_start();

if(!$_SESSION['sid'])
{

    header("Location: ../../home.php");//redirect to login page to secure the welcome page without login access.
}

?>

<?php
	//The code to retrive data from database which user have already entered during registeration will be directly displayed in the form.
	include("../db_connection.php");
	// for god sake sparsh don't do isset we will do it in the end of this page 
	
	$s_id = $_SESSION['sid'];
	
	$fetch_branch_year = "SELECT s_id, s_branch, s_year FROM s_login WHERE s_id='$s_id' ";
	$result_branch_year = mysqli_query($dbcon,$fetch_branch_year);
	
	$get_branch_year = mysqli_fetch_array($result_branch_year,MYSQLI_ASSOC);
	$s_branch	= $get_branch_year['s_branch'];
	$s_year		= $get_branch_year['s_year'];
	mysqli_free_result($result_branch_year);
?>
<?php
	//other
	$display_in_html = "SELECT s_id, s_f_name, s_m_name, s_l_name, s_emailid, s_branch, s_year, s_rollno, s_branch, s_address, s_contact,s_admsnyear ,s_gname, s_goccupation, s_gcontact FROM student_".$s_branch."_".$s_year." WHERE s_id= '$s_id'";
	$result = mysqli_query($dbcon,$display_in_html);

	$print = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$s_name = $print['s_f_name'].' '.$print['s_m_name'].' '.$print['s_l_name'];
	$s_emailid	= $print['s_emailid'];
	$s_branch	= $print['s_branch'];
	$s_year		= $print['s_year'];
	$s_rollno		= $print['s_rollno'];
	$s_branch		= $print['s_branch'];
	//$s_year			= $print['s_year'];
	$s_address		= $print['s_address'];
	$s_admsnyear	= $print['s_admsnyear'];
	//$s_emailid		= $print['s_email'];
	$s_contact		= $print['s_contact'];
	$s_gname		= $print['s_gname'];
	$s_goccupation	= $print['s_goccupation'];
	$s_gcontact     = $print['s_gcontact'];
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
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		
	
		
		                 <h2>   Personal Details</h2>
		
		
		
		
			<div class="col-md-7">
			<div class="well">
			<form role="form" action="personal_details.php" method="POST"style="display: block;" data-pg-collapsed=""> 
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">Name:</label>                 
					<input type="text" class="form-control"  name="sname" value="<?php echo $s_name;  ?>">                 
				</div> 

				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">Rollno:</label>                 
					<input type="text" class="form-control"  name="srollno" value="<?php echo $s_rollno; ?>">                 
				</div>	

				<div class="form-group" style="display: block;" data-pg-collapsed=""> 
					<label class="control-label" for="">Branch:</label>                 
					<select class="form-control" style="display: block;"name="sbranch" > 
						<option><?php echo $s_branch;?></option>
						<option>computer</option>                         
						<option>mechanical</option>                         
						<option>civil</option>
						<option>extc</option>                         
						<option>electrical</option>                         	
					</select>                   
				</div>
				
				<div class="form-group" style="display: block;" data-pg-collapsed=""> 
					<label class="control-label" for="">Year:</label>                 
					<select class="form-control" style="display: block;"name="syear" > 
						<option><?php echo $s_year;?></option>
						<option>se</option>                         
						<option>te</option>                         
						<option>be</option>
						                         	
					</select>                            
				</div>
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">Address:</label>                 
					<input type="text" class="form-control" name="saddress" value="<?php echo $s_address; ?>">                 
				</div>      
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">Year of Addmission:</label>                 
					<input type="text" class="form-control" name="sadmsnyear" value="<?php echo $s_admsnyear; ?>">                 
				</div>      
				
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="exampleInputPassword1">Email ID:</label>                 
					<input type="text" class="form-control" name="semail" value="<?php echo $s_emailid;  ?>">                 
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
	
	<div class="col-md-2">
                    <img src="assets/img/250x250.jpg" class="img-rounded img-responsive" />
					<center><input class="btn btn-primary btn-lg btn-block" type="submit" value="Update" name="formbutton2" ></center>
                    <br />
                    <br />
              
                    <br /><br/>
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
	$s_rollno		= $_POST['srollno'];
	$s_branch		= $_POST['sbranch'];
	$s_year			= $_POST['syear'];
	$s_address		= $_POST['saddress'];
	$s_admsnyear	= $_POST['sadmsnyear'];
	$s_emailid		= $_POST['semail'];
	$s_contact		= $_POST['scontact'];
	$s_gname		= $_POST['sgname'];
	$s_goccupation	= $_POST['sgoccupation'];
	$s_gcontact		= $_POST['sgcontact'];
	
	$update_student = "UPDATE student_".$s_branch."_".$s_year." SET s_rollno='$s_rollno', s_branch='$s_branch', s_year='$s_year', s_address='$s_address', s_admsnyear='$s_admsnyear', s_emailid='$s_emailid', s_contact='$s_contact', s_gname='$s_gname', s_goccupation='$s_goccupation', s_gcontact='$s_gcontact' WHERE s_id='$s_id'";
	if(mysqli_query($dbcon,$update_student)){
				$update_s_login = "UPDATE student_".$s_branch."_".$s_year." SET s_branch='$s_branch', s_year='$s_year'  WHERE s_id='$s_id'";
				mysqli_query($dbcon,$update_s_login);
				echo"<script>window.open('personal_details.php','_self')</script>";
			
	}
	
	
	
	

}
	
?>



























