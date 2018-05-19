<?php

$dbcon = @mysqli_connect('localhost','root','');
if (!$dbcon) {
	die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($dbcon,'hello');

?>