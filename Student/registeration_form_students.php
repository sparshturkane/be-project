<!DOCTYPE html>
<html lang="en">
<?php
include 'reghead.php';
?>

<title>Registeration | mentor system</title>
</head><!--/head-->

<body class="homepage">

<?php
include 'regheader.php';
?>
	
	<div class="container">
	 <hr>
	 <br>
	 <br>
	 <br>
	 </div>
	 

	<div class="container">
	<div class="col-md-3">
			   </div>
			   
	<form class="form col-md-6 center-block" method="post" action="registeration_form_students.php">
        <input class="form-control" placeholder="Student Id" name="sid" type="text" autofocus>
		<br>
		<input class="form-control" placeholder="First    Middle    Last" name="sname" type="text" autofocus>
		<br>
		<input class="form-control" placeholder="Email Id" name="semail" type="text" autofocus>
		<br>
		<select class="form-control" style="display: block;"name="sbranch"> 
			<option>--Select Branch--</option>
			<option value="Computer Engineering">Computer Engineering</option>                         
			<option value="Mechanical Engineering">Mechanical Engineering</option>                         
			<option value="Civil Engineering">Civil Engineering</option>
			<option value="EXTC Engineering">EXTC Engineering</option>                         
			<option value="Electrical Engineering">Electrical Engineering</option>                      	
		</select> 
		<br>
		<select class="form-control" style="display: block;"name="syear"> 
			<option>--Select Year--</option>                         
			<option value="SE">SE</option>                         
			<option value="TE">TE</option>
			<option value="BE">BE</option>                                                  	
		</select> 
		<br>
		<input class="form-control" placeholder="Password" name="spassword" type="text" autofocus>
		<br>
		<input class="btn btn-primary btn-lg btn-block"type="submit" value="register" name="register" >
    </form>
    <center><b>Already registered ?</b> <br></b><a href="../Student_login.php">Login here</a></center><!--for centered text-->
	</div>
	
<br>
<br>
	
<?php
include 'regfooter.php';
?>
</body>
</html>

<?php
include("db_connection.php");//make connection here

if(isset($_POST['register']))
{
	$s_id		=$_POST['sid'];
	$s_name		=$_POST['sname'];
	$s_email	=$_POST['semail'];
    $s_branch	=$_POST['sbranch'];
	$s_year		=$_POST['syear'];
	$s_password	=$_POST['spassword'];
	echo $s_id;
	if($s_id=='')
    {//javascript use for input checking
        echo"<script>alert('Please enter the student id')</script>";
		exit();//this use if first is not work then other will not show
    }
	
	if($s_name=='')
    {
        echo"<script>alert('Enter Name')</script>";
		exit();
    }
	
	
	if($s_email=='')
    {
        echo"<script>alert('Enter Email address')</script>";
		exit();
    }
	
	if($s_branch=='')
    {
        echo"<script>alert('Select branch')</script>";
		exit();
    }
	
	if($s_year=='')
    {
        echo"<script>alert('Select year')</script>";
		exit();
    }
	if($s_password=='')
    {
        echo"<script>alert('Enter password')</script>";
		exit();
    }
	
	
	
	
	//Query to check if user is already registered or not .
			$check_sid_query = "SELECT * FROM student WHERE s_id='$s_id'";//we are using table student_computer_be
			$run_query		 = mysqli_query($dbcon,$check_sid_query);
			if(mysqli_num_rows($run_query)>0)
			{
				echo "<script>alert('Student id $s_id is already exist in our database, Please contact admin!')</script>";
				exit();
			}
			echo "we are here";
			//insert the user into database
			$insert_student = "insert into student(s_id, s_name, s_branch, s_email)values('$s_id','$s_name','$s_branch','$s_email')";
			$insert_s_profile = "insert into s_profile(s_id, s_year,s_branch)values('$s_id','$s_year','$s_branch')";
			mysqli_query($dbcon,$insert_s_profile);//inserting into s_profile table
			if(mysqli_query($dbcon,$insert_student)){ //inserting into student table
				
				//inserting into s_login table
				$insert_s_login = "insert into s_login(s_id, s_password)values('$s_id','$s_password')";
				mysqli_query($dbcon,$insert_s_login);
				
				//inserting into academic_record table
				$insert_academic_record = "insert into academic_record(s_id)values('$s_id')";
				mysqli_query($dbcon,$insert_academic_record);
				
				//inserting into attendance table
				$insert_attendance = "insert into attendance(s_id)values('$s_id')";
				mysqli_query($dbcon,$insert_attendance);
				
				//inserting into term_test table
				$insert_term_test = "insert into term_test(s_id)values('$s_id')";
				mysqli_query($dbcon,$insert_term_test);
				
				//inserting into document_link table
				$insert_document_link = "insert into document_link(s_id)values('$s_id')";
				mysqli_query($dbcon,$insert_document_link);
				
				
				
				echo"<script>window.open('../Student_login.php','_self')</script>";
			}

}
?>