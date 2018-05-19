<?php
session_start();

if(!$_SESSION['mid'])
{

   header("Location: ../home.php");//redirect to login page to secure the welcome page without login access.
}

?>



<?php
	include("db_connection.php");
	//---------------------
	//this mentor stuff
	//---------------------
	$m_id = $_SESSION['mid'];
	$fetch_branch = "SELECT m_id, m_branch, m_name FROM mentor_head WHERE m_id='$m_id'";
	$result_branch = mysqli_query($dbcon,$fetch_branch);

	$get_branch = mysqli_fetch_array($result_branch,MYSQLI_ASSOC);
	$m_branch	= $get_branch['m_branch'];

	$m_name		= $get_branch['m_name'];
	mysqli_free_result($result_branch);

	

	//-----------------------------
	//connection to TABLE: subject_name
	//-----------------------------
	$display_student = "SELECT * FROM subject_name WHERE branch_name= '$m_branch'";
	$result 		= mysqli_query($dbcon,$display_student);

	$print 			= mysqli_fetch_array($result,MYSQLI_ASSOC);
	$s_sem3_sub1 		= $print['s_sem3_sub1'];
	$s_sem3_sub2		= $print['s_sem3_sub2'];
	$s_sem3_sub3		= $print['s_sem3_sub3'];
	$s_sem3_sub4	  	= $print['s_sem3_sub4'];
	$s_sem3_sub5		= $print['s_sem3_sub5'];
	$s_sem3_sub6		= $print['s_sem3_sub6'];
	
	$s_sem4_sub1 		= $print['s_sem4_sub1'];
	$s_sem4_sub2		= $print['s_sem4_sub2'];
	$s_sem4_sub3		= $print['s_sem4_sub3'];
	$s_sem4_sub4	  	= $print['s_sem4_sub4'];
	$s_sem4_sub5		= $print['s_sem4_sub5'];
	$s_sem4_sub6		= $print['s_sem4_sub6'];
	mysqli_free_result($result);
	

	

	
	
?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'swhead.php';
?>

<title>Student Home | mentor system</title>
	<link rel="stylesheet" type="text/css" href="themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="themes/icon.css">
	<link rel="stylesheet" type="text/css" href="themes/color.css">
	<link rel="stylesheet" type="text/css" href="demo/demo.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery.easyui.min.js"></script>
</head><!--/head-->

<body class="homepage">

<?php
include 'swheader.php';
?>
<?php
echo $_SESSION['mid'];
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
        
		
		
		
		
			<div class="col-md-4">
			<h2>   Semester 3</h2>
			<div class="well">
			
			<form role="form" action="marks_se.php" method="POST"style="display: block;" data-pg-collapsed=""> 
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">subject 1:</label>                 
					<input type="text" class="form-control"  name="s_sem3_sub1" value="<?php echo $s_sem3_sub1;  ?>">                 
				</div> 
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">subject 2:</label>                 
					<input type="text" class="form-control"  name="s_sem3_sub2" value="<?php echo $s_sem3_sub2;  ?>">                 
				</div>
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">subject 3:</label>                 
					<input type="text" class="form-control"  name="s_sem3_sub3" value="<?php echo $s_sem3_sub3;  ?>">                 
				</div>
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">subject 4:</label>                 
					<input type="text" class="form-control"  name="s_sem3_sub4" value="<?php echo $s_sem3_sub4;  ?>">                 
				</div>
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">subject 5:</label>                 
					<input type="text" class="form-control"  name="s_sem3_sub5" value="<?php echo $s_sem3_sub5;  ?>">                 
				</div>
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">subject 6:</label>                 
					<input type="text" class="form-control"  name="s_sem3_sub6" value="<?php echo $s_sem3_sub6;  ?>">                 
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
	
	<div class="col-md-4">
	<h2>   Semester 4</h2>
			<div class="well">
			
					
			<form role="form" action="marks_se.php" method="POST"style="display: block;" data-pg-collapsed=""> 
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">subject 1:</label>                 
					<input type="text" class="form-control"  name="s_sem4_sub1" value="<?php echo $s_sem4_sub1;  ?>">                 
				</div> 
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">subject 2:</label>                 
					<input type="text" class="form-control"  name="s_sem4_sub2" value="<?php echo $s_sem4_sub2;  ?>">                 
				</div>
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">subject 3:</label>                 
					<input type="text" class="form-control"  name="s_sem4_sub3" value="<?php echo $s_sem4_sub3;  ?>">                 
				</div>
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">subject 4:</label>                 
					<input type="text" class="form-control"  name="s_sem4_sub4" value="<?php echo $s_sem4_sub4;  ?>">                 
				</div>
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">subject 5:</label>                 
					<input type="text" class="form-control"  name="s_sem4_sub5" value="<?php echo $s_sem4_sub5;  ?>">                 
				</div>
				<div class="form-group" style="display: block;"> 
					<label class="control-label" for="">subject 6:</label>                 
					<input type="text" class="form-control"  name="s_sem4_sub6" value="<?php echo $s_sem4_sub6;  ?>">                 
				</div>
					

			                  
				
				
			
				
				<div class="form-group" style="display: block;"> </div>             
				<div class="form-group" style="display: block;"> </div>             
				<div class="checkbox" style="display: block;"> </div>             
			   
			
			
				
			
			<div class="form-group" style="display: block;"> </div>         
			<div class="form-group" style="display: block;"> </div>         
			<center><input class="btn btn-primary btn-lg btn-block" type="submit" value="Save/Update" name="formbutton2" >
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
include("db_connection.php");//make connection here

if(isset($_POST['formbutton1']))
{
	
	$s_sem3_sub1 		= $_POST['s_sem3_sub1'];
	$s_sem3_sub2		= $_POST['s_sem3_sub2'];
	$s_sem3_sub3		= $_POST['s_sem3_sub3'];
	$s_sem3_sub4	  	= $_POST['s_sem3_sub4'];
	$s_sem3_sub5		= $_POST['s_sem3_sub5'];
	$s_sem3_sub6		= $_POST['s_sem3_sub6'];
	
	//$s_sem4_sub1 		= $_POST['s_sem4_sub1'];
	//$s_sem4_sub2		= $_POST['s_sem4_sub2'];
	//$s_sem4_sub3		= $_POST['s_sem4_sub3'];
	//$s_sem4_sub4	  	= $_POST['s_sem4_sub4'];
	//$s_sem4_sub5		= $_POST['s_sem4_sub5'];
	//$s_sem4_sub6		= $_POST['s_sem4_sub6'];
	//$s_name 		= $_POST[''];

	
	$update_student = "UPDATE subject_name SET  s_sem3_sub1='$s_sem3_sub1', 
												s_sem3_sub2='$s_sem3_sub2', 
												s_sem3_sub3='$s_sem3_sub3', 
												s_sem3_sub4='$s_sem3_sub4',
												s_sem3_sub5='$s_sem3_sub5',
												s_sem3_sub6='$s_sem3_sub6'
												
												WHERE branch_name='$m_branch'";
	if(mysqli_query($dbcon,$update_student)){
				
				echo"<script>window.open('marks_se.php','_self')</script>";
			
	}
	
	
	
	

}

if(isset($_POST['formbutton2']))
{
	

	$s_sem4_sub1 		= $_POST['s_sem4_sub1'];
	$s_sem4_sub2		= $_POST['s_sem4_sub2'];
	$s_sem4_sub3		= $_POST['s_sem4_sub3'];
	$s_sem4_sub4	  	= $_POST['s_sem4_sub4'];
	$s_sem4_sub5		= $_POST['s_sem4_sub5'];
	$s_sem4_sub6		= $_POST['s_sem4_sub6'];
	//$s_name 		= $_POST[''];
	

	
	$update_student = "UPDATE subject_name SET  
												s_sem4_sub1='$s_sem4_sub1',
												s_sem4_sub2='$s_sem4_sub2',
												s_sem4_sub3='$s_sem4_sub3',
												s_sem4_sub4='$s_sem4_sub4',
												s_sem4_sub5='$s_sem4_sub5',
												s_sem4_sub6='$s_sem4_sub6'
												WHERE branch_name='$m_branch'";
	if(mysqli_query($dbcon,$update_student)){
				
				echo"<script>window.open('marks_se.php','_self')</script>";
			
	}
	
	
	
	

}
	
?>



























