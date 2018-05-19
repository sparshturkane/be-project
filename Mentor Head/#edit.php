<?php
/* 
 EDIT.PHP
 Allows user to edit specific entry in database
*/

 // creates the edit record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($f_id, $f_name, $f_branch, $f_email, $f_contact, $f_password, $error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>Edit Record</title>
 </head>
 <body>
 <?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }
 ?> 
 
 <form action="" method="post">
 <input type="hidden" name="f_id" value="<?php echo $f_id; ?>"/>
 <div>
 <p><strong>ID:</strong> <?php echo $f_id; ?></p>
 <strong>ID: *</strong> <input type="text" name="fid" value="<?php echo $f_id; ?>" /><br/>
 <strong>Name: *</strong> <input type="text" name="fname" value="<?php echo $f_name; ?>" /><br/>
 <strong>Branch: *</strong> <input type="text" name="fbranch" value="<?php echo $f_branch; ?>" /><br/>
 <strong>E-Mail: *</strong> <input type="text" name="femail" value="<?php echo $f_email; ?>" /><br/>
 <strong>Contact: *</strong> <input type="text" name="fcontact" value="<?php echo $f_contact; ?>" /><br/>
 <strong>Password: *</strong> <input type="text" name="fpassword" value="<?php echo $f_password; ?>" /><br/>

 <p>* Required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html> 
 <?php
 }



 // connect to the database
 include('db_connection.php');
 
 // check if the form has been submitted. If it has, process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // confirm that the 'id' value is a valid integer before getting the form data
 if (is_numeric($_POST['f_id']))
 {
 // get form data, making sure it is valid
 $f_id 			= mysqli_real_escape_string($dbcon,$_POST['fid']);
 $f_name 		= mysqli_real_escape_string($dbcon,$_POST['fname']);
 $f_branch 		= mysqli_real_escape_string($dbcon,$_POST['fbranch']);
 $f_email 		= mysqli_real_escape_string($dbcon,$_POST['femail']);
 $f_contact 	= mysqli_real_escape_string($dbcon,$_POST['fcontact']);
 $f_password 	= mysqli_real_escape_string($dbcon,$_POST['fpassword']);
 
 // check that firstname/lastname fields are both filled in
 if ($f_id == '' || $f_name == ''|| $f_branch == ''|| $f_email == ''|| $f_contact == ''|| $f_password == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
 renderForm($f_id, $f_name, $f_branch, $f_email, $f_contact, $f_password, $error);
 }
 else
 {
 // save the data to the database
 mysqli_query($dbcon,"UPDATE faculty SET f_id='$f_id', f_name='$f_name', f_branch='$f_branch', f_email='$f_email', f_contact='$f_contact' WHERE f_id='$f_id'")
 or die(mysqli_error()); 
 
 mysqli_query($dbcon,"UPDATE f_login SET f_id='$f_id',f_password='$f_password' WHERE f_id='$f_id'")
 or die(mysqli_error()); 
 
 // once saved, redirect back to the view page
 header("Location: view.php"); 
 }
 }
 else
 {
 // if the 'id' isn't valid, display an error
 echo 'Error!';
 }
 }
 else
 // if the form hasn't been submitted, get the data from the db and display the form
 {
 
 // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
 if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
 {
 // query db
 $id = $_GET['id'];
 $result = mysqli_query($dbcon,"SELECT faculty.f_id, faculty.f_name, faculty.f_branch, f_login.f_password, faculty.f_email, faculty.f_contact FROM faculty INNER JOIN f_login ON faculty.f_id = f_login.f_id")
 or die(mysqli_error()); 
 $row = mysqli_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
 $f_id 		 = $row['f_id'];
 $f_name 	 = $row['f_name'];
 $f_branch 	 = $row['f_branch'];
 $f_email 	 = $row['f_email'];
 $f_contact  = $row['f_contact'];
 $f_password = $row['f_password'];
 
 // show form
 renderForm($f_id, $f_name, $f_branch, $f_email, $f_contact, $f_password, '');
 }
 else
 // if no match, display result
 {
 echo "No results!";
 }
 }
 else
 // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
 {
 echo 'Error!';
 }
 }
?>