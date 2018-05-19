<?php
/* 
 DELETE.PHP
 Deletes a specific entry from the 'players' table
*/

 // connect to the database
 include('db_connection.php');
 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];
 
 // delete the entry
 $result = mysqli_query($dbcon,"DELETE FROM faculty WHERE f_id=$id")
 or die(mysqli_error()); 
 
 mysqli_query($dbcon,"DELETE FROM f_login WHERE f_id=$id")
 or die(mysqli_error());
 
 // redirect back to the view page
 header("Location: view.php");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: view.php");
 }
 
?>