<?php
session_start();

if(!$_SESSION['sid'])
{

   header("Location: ../../home.php");//redirect to login page to secure the welcome page without login access.
}

?>
<?php
 //The code to retrive data from database which user have already entered during registeration will be directly displayed in the form.
 include("../db_connection.php");
 // for god sake sparsh don't do isset we will do it in the end of this page

 $s_id = $_SESSION['sid'];

 $fetch_branch_year = "SELECT s_id, s_branch FROM student WHERE s_id='$s_id' ";
 $result_branch_year = mysqli_query($dbcon,$fetch_branch_year);

 $get_branch_year = mysqli_fetch_array($result_branch_year,MYSQLI_ASSOC);
 $s_branch	= $get_branch_year['s_branch'];
 mysqli_free_result($result_branch_year);

?>
<?php/*
 //other
 $display_in_html = "SELECT s_sem5_am3, s_sem5_oopm, s_sem5_datastruct, s_sem5_dlda, s_sem5_ds, s_sem5_eccf,s_sem6_am4, s_sem6_aoa, s_sem6_coa, s_sem6_dbms, s_sem6_tcs, s_sem6_cg, s_emailid FROM student_".$s_branch."_".$s_year." WHERE s_id= '$s_id'";
 $result = mysqli_query($dbcon,$display_in_html);

 $print = mysqli_fetch_array($result,MYSQLI_ASSOC);
 //sem5
 $s_sem5_am3			= $print['s_sem5_am3'];
 $s_sem5_oopm		= $print['s_sem5_oopm'];
 $s_sem5_datastruct	= $print['s_sem5_datastruct'];
 $s_sem5_dlda		= $print['s_sem5_dlda'];
 $s_sem5_ds			= $print['s_sem5_ds'];
 $s_sem5_eccf		= $print['s_sem5_eccf'];


 //sem6
 $s_sem6_am4		= $print['s_sem6_am4'];
 $s_sem6_aoa		= $print['s_sem6_aoa'];
 $s_sem6_coa		= $print['s_sem6_coa'];
 $s_sem6_dbms	= $print['s_sem6_dbms'];
 $s_sem6_tcs		= $print['s_sem6_tcs'];
 $s_sem6_cg		= $print['s_sem6_cg'];

 $s_emailid	= $print['s_emailid'];

 mysqli_free_result($result);



*/
?>

<?php


 $display_student = "SELECT * FROM subject_name WHERE branch_name= '$s_branch'";
 $result 		= mysqli_query($dbcon,$display_student);

 $print 			= mysqli_fetch_array($result,MYSQLI_ASSOC);
 $s_sem5_sub1 		= $print['s_sem5_sub1'];
 $s_sem5_sub2		= $print['s_sem5_sub2'];
 $s_sem5_sub3		= $print['s_sem5_sub3'];
 $s_sem5_sub4	  	= $print['s_sem5_sub4'];
 $s_sem5_sub5		= $print['s_sem5_sub5'];
 $s_sem5_sub6		= $print['s_sem5_sub6'];

 $s_sem6_sub1 		= $print['s_sem6_sub1'];
 $s_sem6_sub2		= $print['s_sem6_sub2'];
 $s_sem6_sub3		= $print['s_sem6_sub3'];
 $s_sem6_sub4	  	= $print['s_sem6_sub4'];
 $s_sem6_sub5		= $print['s_sem6_sub5'];
 $s_sem6_sub6		= $print['s_sem6_sub6'];
 mysqli_free_result($result);


?>
<?php

$display_marks = "SELECT * FROM term_test WHERE s_id= '$s_id'";
 $result2 		= mysqli_query($dbcon,$display_marks);

 $print2 			= mysqli_fetch_array($result2,MYSQLI_ASSOC);
 //sem5
 $s_sem5_sub1_tt1			= $print2['s_sem5_sub1_tt1'];
 $s_sem5_sub1_tt2			= $print2['s_sem5_sub1_tt2'];
 $s_sem5_sub2_tt1			= $print2['s_sem5_sub2_tt1'];
 $s_sem5_sub2_tt2			= $print2['s_sem5_sub2_tt2'];
 $s_sem5_sub3_tt1			= $print2['s_sem5_sub3_tt1'];
 $s_sem5_sub3_tt2			= $print2['s_sem5_sub3_tt2'];
 $s_sem5_sub4_tt1			= $print2['s_sem5_sub4_tt1'];
 $s_sem5_sub4_tt2			= $print2['s_sem5_sub4_tt2'];
 $s_sem5_sub5_tt1			= $print2['s_sem5_sub5_tt1'];
 $s_sem5_sub5_tt2			= $print2['s_sem5_sub5_tt2'];
 $s_sem5_sub6_tt1			= $print2['s_sem5_sub6_tt1'];
 $s_sem5_sub6_tt2			= $print2['s_sem5_sub6_tt2'];

 //sem6
 $s_sem6_sub1_tt1			= $print2['s_sem6_sub1_tt1'];
 $s_sem6_sub1_tt2			= $print2['s_sem6_sub1_tt2'];
 $s_sem6_sub2_tt1			= $print2['s_sem6_sub2_tt1'];
 $s_sem6_sub2_tt2			= $print2['s_sem6_sub2_tt2'];
 $s_sem6_sub3_tt1			= $print2['s_sem6_sub3_tt1'];
 $s_sem6_sub3_tt2			= $print2['s_sem6_sub3_tt2'];
 $s_sem6_sub4_tt1			= $print2['s_sem6_sub4_tt1'];
 $s_sem6_sub4_tt2			= $print2['s_sem6_sub4_tt2'];
 $s_sem6_sub5_tt1			= $print2['s_sem6_sub5_tt1'];
 $s_sem6_sub5_tt2			= $print2['s_sem6_sub5_tt2'];
 $s_sem6_sub6_tt1			= $print2['s_sem6_sub6_tt1'];
 $s_sem6_sub6_tt2			= $print2['s_sem6_sub6_tt2'];


 mysqli_free_result($result2);
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
echo $_SESSION['sid'];
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





   <h2>    T.E Term Test</h2>







   <div class="col-md-7">
     <div class="well">





   <form role="form" action="tt_te.php" method="POST"style="display: block;" data-pg-collapsed="">






     <center><h3><b> Semister 5 </h3></center>
       <table class="table">
           <thead>
             <tr>
             <th>Subject</th>
             <th>Term Test 1</th>
             <th>Term Test 2</th>
             </tr>
           </thead>
           <tbody>
             <tr>
             <td><?php echo $s_sem5_sub1;  ?></td>
             <td><input type="text" name="s_sem5_sub1_tt1" value="<?php echo $s_sem5_sub1_tt1;  ?>" ></td>
             <td><input type="text" name="s_sem5_sub1_tt2" value="<?php echo $s_sem5_sub1_tt2;  ?>" ></td>
             </tr>
             <tr>
             <td><?php echo $s_sem5_sub2;  ?></td>
             <td><input type="text" name="s_sem5_sub2_tt1" value="<?php echo $s_sem5_sub2_tt1;  ?>" ></td>
             <td><input type="text" name="s_sem5_sub2_tt2" value="<?php echo $s_sem5_sub2_tt2;  ?>" ></td>
             </tr>
             <tr>
             <td><?php echo $s_sem5_sub3;  ?></td>
             <td><input type="text" name="s_sem5_sub3_tt1" value="<?php echo $s_sem5_sub3_tt1;  ?>" ></td>
             <td><input type="text" name="s_sem5_sub3_tt2" value="<?php echo $s_sem5_sub3_tt2;  ?>" ></td>
             </tr>
             <tr>
             <td><?php echo $s_sem5_sub4;  ?></td>
             <td><input type="text" name="s_sem5_sub4_tt1" value="<?php echo $s_sem5_sub4_tt1;  ?>" ></td>
             <td><input type="text" name="s_sem5_sub4_tt2" value="<?php echo $s_sem5_sub4_tt2;  ?>" ></td>
             </tr>
             <tr>
             <td><?php echo $s_sem5_sub5;  ?></td>
             <td><input type="text" name="s_sem5_sub5_tt1" value="<?php echo $s_sem5_sub5_tt1;  ?>" ></td>
             <td><input type="text" name="s_sem5_sub5_tt2" value="<?php echo $s_sem5_sub5_tt2;  ?>" ></td>
             </tr>
             <tr>
             <td><?php echo $s_sem5_sub6;  ?></td>
             <td><input type="text" name="s_sem5_sub6_tt1" value="<?php echo $s_sem5_sub6_tt1;  ?>" ></td>
             <td><input type="text" name="s_sem5_sub6_tt2" value="<?php echo $s_sem5_sub6_tt2;  ?>" ></td>
             </tr>

           </tbody>
       </table>

       <br>
       <br>

     <center><h3><b> Semister 6 </h3></center>
     <br>
           <table class="table">
           <thead>
             <tr>
             <th>Subject</th>
             <th>Term Test 1</th>
             <th>Term Test 2</th>
             </tr>
           </thead>
           <tbody>
             <tr>
             <td><?php echo $s_sem6_sub1;  ?></td>
             <td><input type="text" name="s_sem6_sub1_tt1" value="<?php echo $s_sem6_sub1_tt1;  ?>" ></td>
             <td><input type="text" name="s_sem6_sub1_tt2" value="<?php echo $s_sem6_sub1_tt2;  ?>" ></td>
             </tr>
             <tr>
             <td><?php echo $s_sem6_sub2;  ?></td>
             <td><input type="text" name="s_sem6_sub2_tt1" value="<?php echo $s_sem6_sub2_tt1;  ?>" ></td>
             <td><input type="text" name="s_sem6_sub2_tt2" value="<?php echo $s_sem6_sub2_tt2;  ?>" ></td>
             </tr>
             <tr>
             <td><?php echo $s_sem6_sub3;  ?></td>
             <td><input type="text" name="s_sem6_sub3_tt1" value="<?php echo $s_sem6_sub3_tt1;  ?>" ></td>
             <td><input type="text" name="s_sem6_sub3_tt2" value="<?php echo $s_sem6_sub3_tt2;  ?>" ></td>
             </tr>
             <tr>
             <td><?php echo $s_sem6_sub4;  ?></td>
             <td><input type="text" name="s_sem6_sub4_tt1" value="<?php echo $s_sem6_sub4_tt1;  ?>" ></td>
             <td><input type="text" name="s_sem6_sub4_tt2" value="<?php echo $s_sem6_sub4_tt2;  ?>" ></td>
             </tr>
             <tr>
             <td><?php echo $s_sem6_sub5;  ?></td>
             <td><input type="text" name="s_sem6_sub5_tt1" value="<?php echo $s_sem6_sub5_tt1;  ?>" ></td>
             <td><input type="text" name="s_sem6_sub5_tt2" value="<?php echo $s_sem6_sub5_tt2;  ?>" ></td>
             </tr>
             <tr>
             <td><?php echo $s_sem6_sub6;  ?></td>
             <td><input type="text" name="s_sem6_sub6_tt1" value="<?php echo $s_sem6_sub6_tt1;  ?>" ></td>
             <td><input type="text" name="s_sem6_sub6_tt2" value="<?php echo $s_sem6_sub6_tt2;  ?>" ></td>
             </tr>

           </tbody>
       </table>

     <center><input class="btn btn-primary btn-lg btn-block" type="submit" value="Save/Update" name="formbutton1" >
           </center>

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

<?php
include 'swfooter.php';
?>
</body>
</html>



<?php
include("../db_connection.php");//make connection here

if(isset($_POST['formbutton1']))
{
 //$s_name 		= $_POST[''];

 //ssc details
 $s_sem5_sub1_tt1			= $_POST['s_sem5_sub1_tt1'];
 $s_sem5_sub1_tt2			= $_POST['s_sem5_sub1_tt2'];
 $s_sem5_sub2_tt1			= $_POST['s_sem5_sub2_tt1'];
 $s_sem5_sub2_tt2			= $_POST['s_sem5_sub2_tt2'];
 $s_sem5_sub3_tt1			= $_POST['s_sem5_sub3_tt1'];
 $s_sem5_sub3_tt2			= $_POST['s_sem5_sub3_tt2'];
 $s_sem5_sub4_tt1			= $_POST['s_sem5_sub4_tt1'];
 $s_sem5_sub4_tt2			= $_POST['s_sem5_sub4_tt2'];
 $s_sem5_sub5_tt1			= $_POST['s_sem5_sub5_tt1'];
 $s_sem5_sub5_tt2			= $_POST['s_sem5_sub5_tt2'];
 $s_sem5_sub6_tt1			= $_POST['s_sem5_sub6_tt1'];
 $s_sem5_sub6_tt2			= $_POST['s_sem5_sub6_tt2'];



 //hsc details
 $s_sem6_sub1_tt1			= $_POST['s_sem6_sub1_tt1'];
 $s_sem6_sub1_tt2			= $_POST['s_sem6_sub1_tt2'];
 $s_sem6_sub2_tt1			= $_POST['s_sem6_sub2_tt1'];
 $s_sem6_sub2_tt2			= $_POST['s_sem6_sub2_tt2'];
 $s_sem6_sub3_tt1			= $_POST['s_sem6_sub3_tt1'];
 $s_sem6_sub3_tt2			= $_POST['s_sem6_sub3_tt2'];
 $s_sem6_sub4_tt1			= $_POST['s_sem6_sub4_tt1'];
 $s_sem6_sub4_tt2			= $_POST['s_sem6_sub4_tt2'];
 $s_sem6_sub5_tt1			= $_POST['s_sem6_sub5_tt1'];
 $s_sem6_sub5_tt2			= $_POST['s_sem6_sub5_tt2'];
 $s_sem6_sub6_tt1			= $_POST['s_sem6_sub6_tt1'];
 $s_sem6_sub6_tt2			= $_POST['s_sem6_sub6_tt2'];




 $update_student = "UPDATE term_test SET s_sem5_sub1_tt1='$s_sem5_sub1_tt1',
                     s_sem5_sub1_tt2='$s_sem5_sub1_tt2',
                     s_sem5_sub2_tt1='$s_sem5_sub2_tt1',
                     s_sem5_sub2_tt2='$s_sem5_sub2_tt2',
                     s_sem5_sub3_tt1='$s_sem5_sub3_tt1',
                     s_sem5_sub3_tt2='$s_sem5_sub3_tt2',
                     s_sem5_sub4_tt1='$s_sem5_sub4_tt1',
                     s_sem5_sub4_tt2='$s_sem5_sub4_tt2',
                     s_sem5_sub5_tt1='$s_sem5_sub5_tt1',
                     s_sem5_sub5_tt2='$s_sem5_sub5_tt2',
                     s_sem5_sub6_tt1='$s_sem5_sub6_tt1',
                     s_sem5_sub6_tt2='$s_sem5_sub6_tt2',

                     s_sem6_sub1_tt1='$s_sem6_sub1_tt1',
                     s_sem6_sub1_tt2='$s_sem6_sub1_tt2',
                     s_sem6_sub2_tt1='$s_sem6_sub2_tt1',
                     s_sem6_sub2_tt2='$s_sem6_sub2_tt2',
                     s_sem6_sub3_tt1='$s_sem6_sub3_tt1',
                     s_sem6_sub3_tt2='$s_sem6_sub3_tt2',
                     s_sem6_sub4_tt1='$s_sem6_sub4_tt1',
                     s_sem6_sub4_tt2='$s_sem6_sub4_tt2',
                     s_sem6_sub5_tt1='$s_sem6_sub5_tt1',
                     s_sem6_sub5_tt2='$s_sem6_sub5_tt2',
                     s_sem6_sub6_tt1='$s_sem6_sub6_tt1',
                     s_sem6_sub6_tt2='$s_sem6_sub6_tt2'
                     WHERE s_id='$s_id'";
 if(mysqli_query($dbcon,$update_student)){

       echo"<script>window.open('tt_te.php','_self')</script>";

 }





}

?>
