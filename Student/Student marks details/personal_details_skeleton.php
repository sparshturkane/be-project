 <?php
 /*
session_start();

if(!$_SESSION['sid'])
{

    header("Location: ../../home.php");//redirect to login page to secure the welcome page without login access.
}
*/
include("../db_connection.php");
$s_id = 24512015;

$display_in_html = "SELECT s_id, s_f_name, s_m_name, s_l_name, s_emailid, s_branch, s_year FROM student WHERE s_id= '$s_id'";
$result = mysqli_query($dbcon,$display_in_html);

$print = mysqli_fetch_array($result,MYSQLI_ASSOC);
$s_name = $print['s_f_name'].' '.$print['s_m_name'].' '.$print['s_l_name'];
$s_emailid	= $print['s_emailid'];
$s_branch	= $print['s_branch'];
$s_year		= $print['s_year'];
mysqli_free_result($result);
?>

<html>
<body>

Name: <input type="text" name="sname" value="<?php echo $s_name;  ?>" ><br>
Address:<input type="text" name="saddress" value="" ><br>
Year of Addmission:<input type="text" name="syoa" value="" ><br>
Email ID:<input type="text" name="semail" value="<?php echo $s_emailid;  ?>" ><br>
Contact NO.:<input type="text" name="scontact" value="" ><br>
Fathers's Name:<input type="text" name="sfathername" value="" ><br>
Occupation:<input type="text" name="sfoccupation" value="" ><br>
Contact No:<input type="text" name="sfcontact" value="" ><br>
Email ID:<input type="text" name="sfemail" value="" ><br>
Branch:<input type="text" name="sbranch" value="<?php echo $s_branch;  ?>" ><br>
<input type="submit" name="submit" value="submit"><br>
</body>
</html>