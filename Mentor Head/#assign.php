<?php
session_start();

if(!$_SESSION['mid'])
{

   header("Location: ../../home.php");//redirect to login page to secure the welcome page without login access.
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'swhead.php';
?>

<title>Assign | mentor system</title>
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
   <div class="col-md-5"> </div>


















   <form role="form" action="documentlink.php" method="POST"style="display: block;" data-pg-collapsed="">
       <h2>     Document Link </h2>




     <div class="col-md-7">
     <div class="well">

       <div class="form-group" style="display: block;">
         <label class="control-label" for="">SSC:</label>
         <input type="text" class="form-control"  name="ssem3july" value="<?php echo $s_ssc_dlink;  ?>">
       </div>

       <div class="form-group" style="display: block;">
         <label class="control-label" for="">HSC:</label>
         <input type="text" class="form-control"  name="ssem3aug" value="<?php echo $s_hsc_dlink; ?>">
       </div>

       <div class="form-group" style="display: block;">
         <label class="control-label" for="">SEM 1:</label>
         <input type="text" class="form-control"  name="ssem3sept" value="<?php echo $s_sem1_dlink; ?>">
       </div>

       <div class="form-group" style="display: block;">
         <label class="control-label" for="">SEM 2:</label>
         <input type="text" class="form-control"  name="ssem3oct" value="<?php echo $s_sem2_dlink; ?>">
       </div>

       <div class="form-group" style="display: block;">
         <label class="control-label" for="">SEM 3:</label>
         <input type="text" class="form-control"  name="ssem3nov" value="<?php echo $s_sem3_dlink; ?>">
       </div>

       <div class="form-group" style="display: block;">
         <label class="control-label" for="">SEM 4:</label>
         <input type="text" class="form-control"  name="ssem4jan" value="<?php echo $s_sem4_dlink;  ?>">
       </div>

       <div class="form-group" style="display: block;">
         <label class="control-label" for="">SEM 5:</label>
         <input type="text" class="form-control"  name="ssem4feb" value="<?php echo $s_sem5_dlink; ?>">
       </div>

       <div class="form-group" style="display: block;">
         <label class="control-label" for="">SEM 6:</label>
         <input type="text" class="form-control"  name="ssem4mar" value="<?php echo $s_sem6_dlink; ?>">
       </div>

       <div class="form-group" style="display: block;">
         <label class="control-label" for="">SEM 7:</label>
         <input type="text" class="form-control"  name="ssem4april" value="<?php echo $s_sem7_dlink; ?>">
       </div>

       <div class="form-group" style="display: block;">
         <label class="control-label" for="">SEM 8:</label>
         <input type="text" class="form-control"  name="ssem4may" value="<?php echo $s_sem8_dlink; ?>">
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
