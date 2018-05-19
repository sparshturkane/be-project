<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'head.php';
?>

<title>Login | student login</title>
</head><!--/head-->

<body class="homepage">

<?php
include 'header.php';
?>
	
<div class="container">
	 <hr>
	 <br>
	 <br>
	 <br>
	 </div>
      <div class="container">
	      <div class="row">
		      
			  <div class="col-md-3">
			   </div>
                <form class="form col-md-6 center-block" method="post" action="Student_login.php"><center><b>Log in</center>
					<div class="well">
					 <div class="form-group">
					  <input type="text" class="form-control input-lg" placeholder="Student id " name="sid" type="" autofocus>
					 </div>
					 <div class="form-group">
					  <input type="password" class="form-control input-lg" placeholder="Password" name="spassword" type="password" autofocus>
					 </div>
					 <div class="form-group">
							 <input class="btn btn-primary btn-lg btn-block" type="submit" value="login" name="login" >
							 
							 <span class="pull-right"><a href="Student/registeration_form_students.php">Register</a></span><span><a href="#">Need help?</a></span>
					 </div>
					 </div>
              </form>
		  
      <br>
	  <br>
            		  
           
	 </div>
  </div>	
	
<?php
include 'footer.php';
?>
</body>
</html>

<?php
include("Student/db_connection.php");
if(isset($_POST['login']))
{
	$student_id=$_POST['sid'];
	$student_password=$_POST['spassword'];
	
	//verify user in database
	$check_user = "select * from s_login where s_id='$student_id'  and  s_password='$student_password' ";
	
	 $run=mysqli_query($dbcon,$check_user);
	 
	  if(mysqli_num_rows($run))
    {
		
		 echo "<script>window.open('Student/Student marks details/studenthome.php','_self')</script>";
		 $_SESSION['sid']=$student_id;//here session is used and value of $student_id store in $_SESSION.
        

    }
	
	 else
    {
        echo "<script>alert('Student Id  or password is incorrect!')</script>";
    }
}
?>








