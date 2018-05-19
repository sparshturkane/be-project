<!DOCTYPE html>
<html lang="en">
<?php
include 'head.php';
?>

<title>About-us | mentor system</title>
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
                        <li><a href="services.php">Services</a></li>
                        
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="Student_login.php">Student</a></li>
                                <li><a href="Mentor_login.php">Mentor</a></li>
                                <li><a href="Mentor_head_login.php">Mentor Head</a></li>
								
                               
                            </ul>
                        </li>
                       
						<li class="active"><a href="aboutus.php">About us</a></li>
                        <li><a href="contactus.php">Contact us</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
	
    </header><!--/header-->
	
<section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>About Developers</h2>
				<p class="lead"><b>Viva Institute of Technology : Mentor System </b> was assigned as a BE project to below group <br> However,this is one version of project.This website may change in future according to requirements</p>
			</div>
			
			<!-- about us slider -->
			<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
				  	</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="images/slider_one.jpg" class="img-responsive" alt=""> 
					   </div>
					   <div class="item">
							<img src="images/slider_one.jpg" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="images/slider_one.jpg" class="img-responsive" alt=""> 
					   </div> 
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
			
			
			<!-- Our Skill -->
			<div class="skill-wrap clearfix">
			
				<div class="center wow fadeInDown">
					<h2>Our Skill/Contributions</h2>
					<p class="lead"> <b>Front-end developer: Nilaakash U Singh </b>(Bootstrap effects and page layouts) <br> <b>Backend Developer:Sparsh R Turkane </b>(php) <br><b> Support : Manoj M Yadav</b> </p>
				</div>
			</div>	
			
			

			<!-- our-team -->
			<div class="team">
				<div class="center wow fadeInDown">
					<h2>Team of MSN</h2>
					<p class="lead">This section for Developers who made this idea of web application possible  <br> Before getting this project this lads was also the same like you all <br> But the hardwork as well as dedication helped them to contribute for their Institute</p>
				</div>

				<div class="row clearfix">
				<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man2.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Sparsh R. Turkane</h4>
									<h5>Back End Developer PHP connection SQL Database</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">PHP</a></li>
										<li class="btn"><a href="#">SQL quering</a></li>
										<li class="btn"><a href="#">UX</a></li>
										<li class="btn"><a href="#">DB Design</a></li>
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>The Heart of project !!    The laziest and intellectual person of MSN group. Dedicated quote for him "Where there is a will there is a way & Where there is no will there is a highway"</p>
						</div>
					</div><!--/.col-lg-4 -->		
					
					
					<div class="col-md-4 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man1.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Nilaakash U. Singh</h4>
									<h5>Front end Developer and UI/UX designer</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Web</a></li>
										<li class="btn"><a href="#">Ui</a></li>
										<li class="btn"><a href="#">Ux</a></li>
									</ul>
									
									<ul class="social_icons">
										<li><a href="https://www.facebook.com/P.Neelakash"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://plus.google.com/111037672787938326254"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>The Plan maker !!    Always have a plan for every task and also come's out with flexible ideas . Dedicated quote for him "For every action there is an equal and opposite reaction"</p>
						</div>
					</div><!--/.col-lg-4 -->
					
					
								
				</div> <!--/.row -->
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div> <!--skill_border-->       

				<div class="row clearfix">   
					<div class="col-md-4 col-sm-6 col-md-offset-2">	
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man3.jpg" alt=""></a>
								</div>

								<div class="media-body">
									<h4>Manoj M.Yadav</h4>
									<h5>Support</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">PPT</a></li>
										<li class="btn"><a href="#">javascript</a></li>
									
									</ul>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div><!--/.media -->
							<p>The Conspiracy Guy !!   Always interested in things happening around. Always active.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
							<div class="media">
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/man4.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<h4>Rajat Saboo & Inderjeet sav</h4>
									<h5>Contribution</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Special thanks</a></li>
										
									</ul>
									
								</div>
							</div><!--/.media -->
							<p>Our classmate's who has a passion of web designing and helped us by providing necessary information about tool's and materials used for front end development</p>
						</div>
					</div>
				</div>	<!--/.row-->
			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->

	
<?php
include 'footer.php';
?>
</body>
</html>