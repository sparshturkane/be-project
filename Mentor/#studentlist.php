 <?php
session_start();

if(!$_SESSION['femail'])
{

    header("Location: ../home.php");//redirect to login page to secure the welcome page without login access.
}

?>

<?php
	//The code to retrive data from database which user have already entered during registeration will be directly displayed in the form.
	include("db_connection.php");
	// for god sake sparsh don't do isset we will do it in the end of this page 
	
	$s_id = $_SESSION['femail'];
	
	
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
echo $_SESSION['femail'];
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
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		
	
		
		                 
		<form role="form" action="actual_assign.php" method="POST"style="display: block;" data-pg-collapsed=""> 
				<h2>     Student list </h2>
		
		
		
		
			<div class="col-md-7">
			<div class="well">
			
			<div>
			<a href="computer_be.php">Computer be</a><br>
			
			<a href="computer_be.php">Computer se</a><br>
			<a href="computer_be.php">Computer te</a><br>
			</div>
			
			<div>
			
			</div>
				
			
			<div class="form-group" style="display: block;"> </div>         
			<div class="form-group" style="display: block;"> </div>         
			
				
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
	<br>
	<br>
	
	<br> 
	<br>
	<br>
	
	<br> 
	<br>
	<br>
	
	<br> 
	<br>
	<br>
	
	<br> 
	<br>
	
	<br>
	
	
<?php
include 'swfooter.php';
?>
</body>
</html>



<?php
include("db_connection.php");//make connection here

if(isset($_POST['formbutton1']))
{
	
	$s_branch		= $_POST['sbranch'];
	$s_year 		= $_POST['syear'];


	$_SESSION['sbranch']=$s_branch;
	$_SESSION['syear']=$s_year;
	echo"<script>window.open('actual_assign.php','_self')</script>";
			

	
	
	
	

}
	
?>



























