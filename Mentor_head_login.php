<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'head.php';
?>
<title>Login | mentor head login</title>
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
                 <form class="form col-md-6 center-block" method="post" action="Mentor_head_login.php"><center><b>Log in</center>
					<div class="well">
					 <div class="form-group">
					  <input type="text" class="form-control input-lg" placeholder="ID " name="mid" type="" autofocus>
					 </div>
					 <div class="form-group">
					  <input type="password" class="form-control input-lg" placeholder="Password" name="mpassword" type="password" autofocus>
					 </div>
					 <div class="form-group">
							 <input class="btn btn-primary btn-lg btn-block" type="submit" value="login" name="login" >
							 
							 <span class="pull-right"></span><span><a href="#">Need help?</a></span>
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

include("Mentor Head/db_connection.php");
if(isset($_POST['login']))
{
	$m_id		=$_POST['mid'];
	$m_password =$_POST['mpassword'];
	
	//verify user in database
	$check_user = "select * from mentor_head where m_id='$m_id'  and  m_password='$m_password' ";
	
	 $run=mysqli_query($dbcon,$check_user);
	 
	  if(mysqli_num_rows($run))
    {
		
		 echo "<script>window.open('Mentor Head/mentor_head_home.php','_self')</script>";
		 $_SESSION['mid']=$m_id;//here session is used and value of $mentor_id store in $_SESSION.
        

    }
	 else
    {
        echo "<script>alert('Id  or password is incorrect!')</script>";
    }
}
?>