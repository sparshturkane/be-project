<?php



	
	//-----------------------------
	//connection to TABLE: student
	//-----------------------------
	$display_student = "SELECT * FROM student WHERE s_id= '$s_id'";
	$result 		= mysqli_query($dbcon,$display_student);

	$print 			= mysqli_fetch_array($result,MYSQLI_ASSOC);
	$s_name 		= $print['s_name'];
	mysqli_free_result($result);
?>



<header id="header">
       <div class="top-bar">
            <div class="container">
               <hr>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../../home.php"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li ><a href="../../home.php">Home</a></li>    
                        <li><a href="../../services.php">Services</a></li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="../../Student_login.php">Student</a></li>
                                <li><a href="../../Mentor_login.php">Mentor</a></li>
                                <li><a href="../../Mentor_head_login.php">Mentor Head</a></li>                      
                            </ul>
                        </li>
						<li><a href="../../aboutus.php">About us</a></li>
                        <li><a href="../../contactus.php">Contact us</a></li>
						<li><a href="logout.php">Logout</a></li>
						<li class="active"><a href="#"> <?php echo $s_name ;?></a></li>
						
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
	
    </header><!--/header-->