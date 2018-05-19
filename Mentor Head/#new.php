<?php
/* 
 NEW.PHP
 Allows user to create a new entry in the database
*/
 
 // creates the new record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($f_id, $f_name, $f_branch, $f_email, $f_contact, $f_password, $error)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
 <head>
 <title>New Record</title>
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
 <div>
 <strong>ID: *</strong> <input type="text" name="fid" value="<?php echo $f_id; ?>" /><br/>
 <strong>Name: *</strong> <input type="text" name="fname" value="<?php echo $f_name; ?>" /><br/>
 <strong>Branch: *</strong> <input type="text" name="fbranch" value="<?php echo $f_branch; ?>" /><br/>
 <strong>E-Mail: *</strong> <input type="text" name="femail" value="<?php echo $f_email; ?>" /><br/>
 <strong>Contact: *</strong> <input type="text" name="fcontact" value="<?php echo $f_contact; ?>" /><br/>
 <strong>Password: *</strong> <input type="text" name="fpassword" value="<?php echo $f_password; ?>" /><br/>

 <p>* required</p>
 <input type="submit" name="submit" value="Submit">
 </div>
 </form> 
 </body>
 </html>
 <?php 
 }
 
 
 

 // connect to the database
 include('db_connection.php');
 
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // get form data, making sure it is valid
 $f_id 			= mysqli_real_escape_string($dbcon,$_POST['fid']);
 $f_name 		= mysqli_real_escape_string($dbcon,$_POST['fname']);
 $f_branch 		= mysqli_real_escape_string($dbcon,$_POST['fbranch']);
 $f_email 		= mysqli_real_escape_string($dbcon,$_POST['femail']);
 $f_contact 	= mysqli_real_escape_string($dbcon,$_POST['fcontact']);
 $f_password 	= mysqli_real_escape_string($dbcon,$_POST['fpassword']);
 
 
 // check to make sure both fields are entered
 if ($f_id == '' || $f_name == ''|| $f_branch == ''|| $f_email == ''|| $f_contact == ''|| $f_password == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 // if either field is blank, display the form again
 renderForm($f_id, $f_name, $f_branch, $f_email, $f_contact, $f_password, $error);
 }
 else
 {
 // save the data to the database

 mysqli_query($dbcon,"INSERT faculty SET f_id='$f_id', f_name='$f_name', f_branch='$f_branch', f_email='$f_email', f_contact='$f_contact'")
 or die(mysqli_error()); 
  mysqli_query($dbcon,"INSERT f_login SET f_id='$f_id', f_password='$f_password' ")or die(mysqli_error());
 
 // once saved, redirect back to the view page
 header("Location: view.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','','','','','');
 }
?>