<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SkyLearn</title>
        <meta name="keywords" content="" />
		<meta name="description" content="" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="shortcut icon" href="PUT YOUR FAVICON HERE">-->
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
       
       	<!--Font Awesome-->
       	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css"> 
       
        
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        
    </head>
    
    <body>

        <div class="templatemo-top-bar" id="templatemo-top">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left">
                            <img src="images/phone.png" alt="phone"/>
                            081-6274-0850
                    </div>
                    <div id="email" class="pull-right">
                            <img src="images/email.png" alt="email"/>
                            info@skylearn.com
                    </div>
                </div>
            </div>
        </div>
        <div class="templatemo-top-menu">
            <div class="container">
                <!-- Static navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="#" class="navbar-brand"><img src="images/templatemo_logo.png" alt="Skylearn" title="Skylearn" /></a>
                        </div>
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                <li class="active"><a href="#templatemo-top" class="external-link" target="_parent">HOME</a></li>
                                <li><a href="#templatemo-welcome" class="external-link" target="_parent">ABOUT</a></li>
                                <li><a href="#templatemo-contact" class="external-link" target="_parent">CONTACT</a></li>
                                <li><a href="register.php" class="external-link" target="_parent">REGISTER</a></li>
								<li class="dropdown">
                                	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> LOGIN</a>
                                    <ul class="dropdown-menu" role="menu">
                                    	<li>
                                        	<div style="width:300px; padding:20px;">
                                        	<form role="form" action="login_init.php" method="post">
                                        		<div class="form-group">
                                            		<input type="text" class="form-control"  name ="email" placeholder="Username" required/>
                                            	</div>
                                                <div class="form-group">
                                            		<input type="password" class="form-control" name="password" placeholder="Password" required/>                                            	</div>
                                                <div class="form-group">
                                            		<button type="submit" class="btn btn-primary form-control" role="button">
                                                    	Login <span class="fa fa-chevron-circle-right"></span>
                                                    </button>
                                            	</div>
                                                <div class="text-center">
                                        			New User? <a href="register.php" class="external-link" target="_parent">Register here</a>
                                        		</div>
                                                <div class="text-center">
													<a href="passwordrecover.php" class="external-link" target="_parent">Forgot password?</a>
												</div>
                                            </form>
                                            </div>
                                        </li>
                                    </ul>
                                </li>							
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
        
        <div>
            <!-- Carousel -->
            <div id="templatemo-carousel" class="carousel slide hidden-xs" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#templatemo-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="1"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>WELCOME TO SKYLEARN</h1>
                                <p>learning from the sky</p>
                                <p>THE ONE SUITABLE PLATFORM FOR YOU TO PRACTICE FOR EXAM</p>
                                <p><a class="btn btn-lg btn-orange" href="register.php" role="button">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="container">
                                <div class="carousel-caption">
                                    <div class="col-sm-6 col-md-6">
                                    	<h1>NEW APPLICATION DOWNLOAD</h1>
                                        <p>download our mobile application, here</p>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                    	<h1>SKYLEARN MOBILE INTERFACE</h1>
                                        <p>images from our mobile applications</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                        <div class="item">
                            <div class="container">
                                <div class="carousel-caption">
                                	<h1>INFORMATION ABOUT UPDATES</h1>
                                    <p>here is a new updates for our platform, upgrade to a premium user. or anything</p>
                                    <p><a class="btn btn-lg btn-orange" href="#templatemo-welcome" role="button">Read More</a></p>
                                </div>
                            </div>
                        </div>
                </div>
                <a class="left carousel-control" href="#templatemo-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#templatemo-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div><!-- /#templatemo-carousel -->
        </div>

        <div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Welcome to </span><span class="txt_orange">SkyLearn</span>
                    <p class="txt_slogan"><i>SkyLearn was an idea developed at the Skylar Hackaton 2015 challenge. It is an online platform for youths, admission seekers, students to practice exam test on the go regardless of constraints such as poor internet connectivity, device specifications etc.
This platform was designed in such a way that it caters for most exams taken by Nigerian Students. We have partnered with top organizations inorder to make it as easy and as user-friendly as possible.</i></p>
                </div>	
            </div>
        </div>
        
        <div class="templatemo-service">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="images/leaf.png" alt="icon" />
                                <span class="templatemo-service-item-header">EASY-TO-USE</span>
                            </div>
                            <p>SkyLearn is developed in such a way that a novice could easily use it. Register your account <a href="register.php">here</a>, create a user profile and begin practicing. It's just 3-easy steps away. Also, if you have any trouble using the platform, feel free to message us <a href="#templatemo-contact">here</a></p>
                            <div>
                            	<a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange">READ MORE</a>
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="templatemo-service-item" >
                            <div>
                                <img src="images/mobile.png" alt="icon"/>
                                <span class="templatemo-service-item-header">MOBILE RESPONSIVE</span>
                            </div>
							<p>Technology has advanced in such a way that you can connect anywhere, anytime, using any device. Most users now surf the internet using different devices such as PCs, mobile phones, tablets etc. with the greater number of users being on mobile devices. </p>
                            <div>
                                <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange">READ MORE</a>
                            </div>
                            <br class="clearfix"/>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-4">
                        <div class="templatemo-service-item">
                            <div>
                                <img src="images/battery.png" alt="icon"/>
                                <span class="templatemo-service-item-header">USER FRIENDLY</span>
                            </div>
                            <p>Out of one-many features of this site is its user friendliness. SkyLearn was developed in such a way that users find it fun to use and do not go through lots of hurdles when testing. Social network integration also makes it a wonderful experience</p>
                            <div>
                                <a href="#" 
                                	class="templatemo-btn-read-more btn btn-orange">READ MORE</a>
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <br class="clearfix"/>
                    </div>
                </div>
            </div>
        </div>

        <div id="templatemo-contact">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header head_contact">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">CONTACT US</span>
                            <hr class="team_hr team_hr_right hr_gray"/>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="templatemo-contact-map" id="map-canvas"> </div>  
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 contact_right">
                        <p>For General, Feedback and Complaint Enquiries.</p>
                        <p><img src="images/location.png" alt="icon 1" /> 10, Alagomeji, Off Herbert Macaulay, Yaba, Lagos. </p>
                        <p><img src="images/phone1.png"  alt="icon 2" /> 081-6274-0850</p>
                        <p><img src="images/globe.png" alt="icon 3" /><a class="link_orange" href="#"><span class="txt_orange">www.skylearn.com</span></a></p>
                        <form class="form-horizontal" action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Name..." maxlength="40" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email..." maxlength="40" />
                            </div>
                            <div class="form-group">
                                <textarea  class="form-control" style="height: 130px;" placeholder="Write down your message..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-orange pull-right">SEND</button>
                        </form>
                        	
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /#templatemo-contact -->


        <div class="templatemo-partners" >
            <div class="container">
                <div class="row">

                    <div class="templatemo-line-header" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">OUR PARTNERS</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="text-center">

                        <div style="margin-top:20px;">
                            <ul class="list-inline">
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="http://jamb.org.ng" target="_blank"><img src="images/jamb-sm.png" class="img-responsive" alt="Jamb" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="http://waec.org" target="_blank"><img src="images/waec-sm.png" class="img-responsive" alt="Waec" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="http://mynecoexams.com" target="_blank"><img src="images/neco-sm.png" class="img-responsive" alt="Neco" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="http://mtnonline.com" target="_blank"><img src="images/mtn-sm.png" class="img-responsive" alt="partner 6" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="http://skylar.com.ng" target="_blank"><img src="images/skylar-sm.png" class="img-responsive" alt="partner 5" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                	<a href="http://ets.org/toefl" target="_blank"><img style="margin-top:25px;" src="images/toefl-sm.png" class="img-responsive" alt="Toefl" /></a>

                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div><!--templatemo-partner-->


        <div class="templatemo-footer" >
            <div class="container">
                <div class="row">
                    <div class="text-center">

                        <div class="footer_container">
                            <ul class="list-inline">
                                <li>
                                    <a href="#">
                                        <span class="social-icon-fb"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-rss"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-linkedin"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-dribbble"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="height30"></div>
                            <a class="btn btn-lg btn-orange" href="#" role="button" id="btn-back-to-top">Back To Top</a>
                            <div class="height30"></div>
                        </div>
                        <div class="footer_bottom_content">
                   			<span>Copyright © 2015 <a href="#">SKYLAR INNOVATIVES</a></span>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/templatemo_script.js"  type="text/javascript"></script>
        <script type="text/javascript">
			$(document).ready(function(e) {
                $('.dropdown-toggle').dropdown();
            });
		</script>
		<!-- DESIGNED BY IRSHAAD MEDIA @ www.irshaadmedia.com -->
    </body>
</html>