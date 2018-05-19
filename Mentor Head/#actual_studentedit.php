 <?php
session_start();

if(!$_SESSION['femail'])
{

    header("Location: ../home.php");//redirect to login page to secure the welcome page without login access.
}

?>


<?php
echo $_SESSION['sbranch'];
echo $_SESSION['syear'];


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
//echo $_SESSION['femail'];
?>
	
<!-- sparsh body contents for php enhancement  -->
<div class="container">
	 <hr>
	 <br>
	 <br>
	 <br>
	 </div>
	 
 
 
   
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
    <div class="container" style="display: block;">
        	
		<div class="row">
		<div class="col-md-5"> </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		
	
		
		                 
		
				<h2>      Student & Faculty list </h2>
		
		
		
		
			<div class="col-md-7">
			
			
		<table class="table">
			<tr>
			  <td>Roll No</td>
			  <td>Name</td>
			  <td>Mentor Name</td>  
			  <td>Mentor ID</td>	
			</tr>
			<?php
				include("db_connection.php");
				$query = "SELECT s_id, s_f_name,s_m_name,s_l_name, s_mentorname, s_mentorid FROM student_".$_SESSION['sbranch']."_".$_SESSION['syear']." ";
				$result = mysqli_query($dbcon,$query);
				while($row = mysqli_fetch_array($result)) {
				echo "<thread>
					  <tr>
					  <td>$row[s_id]</td>
					  <td>$row[s_f_name]</td>
					  <td>$row[s_mentorname]</td>
					  <td>$row[s_mentorid] </td>
					  <td><a href="edit.php?id=' . $row['s_id'] . '">Edit</a></td>
					  <td><a href="delete.php?id=' . $row['s_id'] . '">Delete</a></td>
					  </tr>
					  </thread>";
				}
			?>
		</table>
		
		
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






























