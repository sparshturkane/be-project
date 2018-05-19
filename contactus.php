<!DOCTYPE html>
<html lang="en">
<?php
include 'head.php';
?>

<title>Contact-us | mentor system</title>
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
                       
						<li><a href="aboutus.php">About us</a></li>
                        <li class="active"><a href="contactus.php">Contact us</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
	
    </header><!--/header-->
	
<section id="contact-info">

        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google map							</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:7,center:new google.maps.LatLng(19.468429347514483,72.86681192056884),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.468429347514483,72.86681192056884)});infowindow = new google.maps.InfoWindow({content:'<strong>Viva Institute of Technology</strong><br>VIVA Institute of Technology, Veer Savarkar Road, Chandansar, Kumbharpada, Maharashtra<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>  
                    </div>

                    <div class="col-sm-5 map-content">
                        <ul class="row">
                            <li class="col-sm-12">
                                <address>
								    <h2>Viva Institute of technology</h2>
                                  <h4>  Shirgaon, Veer Sawarkar road, Virar(East)
                                    <p>                         Tal-Vasai, Dist-Thane, Maharashtra.<br>
                                    </p>
                                    <p>Phone: (0250)-6990999  /  6965620  /  6965628 <br>
                                    Email Address:principalvit@vivacollege.org
<br>
                        Contact@viva-technology.org</p>
						<p>Telefax:         91-22-39167294</p></h4>
                                </address>


                            </li>


                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">

    </section><!--/#contact-page-->
	
	
	
	
	
<?php
include 'footer.php';
?>
</body>
</html>