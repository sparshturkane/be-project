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
	
	$fetch_student = "SELECT s_id, s_f_name,s_m_name,s_l_name, s_mentorname, s_mentorid FROM student_computer_be  ";
	$result_student = mysqli_query($dbcon,$fetch_student);
	
	$get_student = mysqli_fetch_array($result_student,MYSQLI_ASSOC);
	$s_id			= $get_student['s_id'];
	$s_f_name		= $get_student['s_f_name'];
	$s_m_name		= $get_student['s_m_name'];
	$s_l_name		= $get_student['s_l_name'];
	$s_mentorname	= $get_student['s_mentorname'];
	$s_mentorid		= $get_student['s_mentorid'];

	mysqli_free_result($result_student);
	
?>
<?php

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
				<h2>      Student & Faculty list </h2>
		
		
		
		
			<div class="col-md-7">
			
			<form method="post" action="final_assign.php">
		<table class="table">
			<tr>
			  <td>Roll No</td>
			  <td>Name</td>
			  <td>Mentor Name</td>  
			  <td>Mentor ID</td>	
			</tr>
			<?php
				include("db_connection.php");
				$query = "SELECT s_id, s_f_name,s_m_name,s_l_name, s_mentorname, s_mentorid FROM student_computer_be";
				$result = mysqli_query($dbcon,$query);
				while($row = mysqli_fetch_array($result)) {
				echo "<thread>
					  <tr>
					  <td>$row[s_id]</td>
					  <td>$row[s_f_name]</td>
					  <td>$row[s_mentorname]</td>
					  <td>$row[s_mentorid] </td>
					  </tr>
					  </thread>";
				}
			?>
		</table>
		<input type="submit" value="Assign" name="assign">
		
		<br>
		<br>
		<br>
		<br>
		
			<table class="table">
				<tr>
				  <td>ID NO</td>
				  <td>Name</td>                                     
				</tr>
				<?php
				
					$query = "SELECT name,cardid FROM teacher";
					$result = mysqli_query($dbcon,$query);
					while($row = mysqli_fetch_array($result)) {
					echo "
							<thread>
							<tr>
						  <td>$row[cardid]</td>
						  <td>$row[name]</td>
						  
						  </tr>
						  </thread>
						  ";
					}
				?>
			</table>
			
				
			
			<div class="form-group" style="display: block;"> </div>         
			<div class="form-group" style="display: block;"> </div>         
			
				
		</form>

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
/*
include("db_connection.php");//make connection here

if(isset($_POST['assign']))
{
	//$s_name 		= $_POST[''];
	
	//ssc details
	$insert_student1 ="UPDATE `1332016mentorsystem`.`student_computer_be` SET `s_mentorname` = 'rane', `s_mentorid` = '1' WHERE `student_computer_be`.`id` = 34";
	mysqli_query($dbcon,$insert_student1);
	echo"<script>window.open('final_assign.php','_self')</script>";
			

	
	
	
	

}
*/	
?>




























