<!DOCTYPE html>
<html lang="en">
<?php
include 'head.php';
?>

<title>Services | mentor system</title>
</head><!--/head-->

<body class="homepage">

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
                    <a class="navbar-brand" href="home.php"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="home.php">Home</a></li>    
                        <li class="active"><a href="services.php">Services</a></li>
                        
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="Student_login.php">Student</a></li>
                                <li><a href="Mentor_login.php">Mentor</a></li>
                                <li><a href="Mentor_head_login.php">Mentor Head</a></li>
								
                               
                            </ul>
                        </li>
                       
						<li><a href="aboutus.php">About us</a></li>
                        <li><a href="contactus.php">Contact us</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
	
    </header><!--/header-->
	
<section id="feature" class="transparent-bg">
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Our Services</h2>
                <p class="lead">This are the some features that we are adding in addition, <br> Also our web application is the first form based bootstrap web app.</p>
            </div>
              <div class="features">
            <div class="row">
              
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" class="clearfix">
                        <div class="feature-wrap">
                            <i class="glyphicon glyphicon-lock"></i>
                            <h2>Security</h2>
                            <h3>The website is strongly not prone to SQL injection attack.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" class="clearfix">
                        <div class="feature-wrap">
                            <i class="glyphicon glyphicon-comment"></i>
                            <h2>Student mentor chat</h2>
                            <h3>A dedicated section for student and mentor for discussion's in personal manner</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" class="clearfix">
                        <div class="feature-wrap">
                            <i class="glyphicon glyphicon-check"></i>
                            <h2>Accuracy</h2>
                            <h3>Data of student in backend will be stored and retrieved accurately</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
				</div>
				<div class="row">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" class="clearfix">
                        <div class="feature-wrap">
                            <i class="glyphicon glyphicon-barcode"></i>
                            <h2>Privacy</h2>
                            <h3>Md5 Algorithm is used for storing password in database, even password is not visible to developer's</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" class="clearfix">
                        <div class="feature-wrap">
                            <i class="glyphicon glyphicon-subtitles"></i>
                            <h2>Notification</h2>
                            <h3>Easy access to notification class wise is available on the home page</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" class="clearfix">
                        <div class="feature-wrap">
                            <i class="glyphicon glyphicon-heart-empty"></i>
                            <h2>User friendly</h2>
                            <h3>As the website has bootstrap flavour it is easier and friendlier for user's in mobile, pc also on any platform</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row--> 


            <div class="clients-area center wow fadeInDown">
                <h2>Some of our inspirations </h2>
                <p class="lead">This are some of our inspirations and motivations without them the project was not possible  <br> We would like to appreciate their work in this section</p>
            </div>

            <div class="row">
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="images/client1.png" class="img-circle" alt="">
                        <h3>The staff who believe in our potiental's and trustfully enroll MSN group for this project</h3>
                        <h4><span>-Ms. Ashwini save  /</span> <br>HOD ma'm <br> Department: Computer Engineering</h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="images/client2.png" class="img-circle" alt="">
                        <h3>Our true supporter believed in us  and provide us support by helping us where ever possible</h3>
                        <h4><span>Tatwadarshi P.N Sir /</span> <br>  Best Student Interaction Sir</h4>
                    </div>
                </div>
                <div class="col-md-4 wow fadeInDown">
                    <div class="clients-comments text-center">
                        <img src="images/client3.png" class="img-circle" alt="">
                        <h3>Our classmate's who has a passion of web designing and helped us by providing necessary information about tool's and materials used for front end development</h3>
                        <h4><span>-Rajat Saboo & Inderjeet Sav /</span> <br> Great contribution in front end decision making</h4>
                    </div>
                </div>
           </div>

        </div><!--/.container-->
    </section><!--/#feature-->	
	
	
	
	
	
	

	
<?php
include 'footer.php';
?>
</body>
</html>