<?php include "core.php";?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Irshaad Technologies :: Contact Us</title>
    <meta name="keywords" content="Irshaad Technologies,technologies, information and communication technology, tech, web design, web application development, programming, application development, mobile application development, graphic design, logo design, corporate identity, poster design, on-site repair, of-site repair, computer repairs, cctv instalation, home security installation, computer purchase, hardware repairs, communications, informations, digital, digital information, info, infotech, digital info" />
    <meta name="description" content="This is Irshaad Technologies. We are based in Kwara Nigeria. we are an indigenous Technology service provider firm incorporated in Nigeria. We provide cutting edge technological solutions to enhance the technological terrain in nigeria and its environ to our esteem clients by delivering high class value through our brilliant innovation. We Specialize in web and mobile application development, web design, web hosting, software development, services and security system installation, networking and technology procurement. We Are Irshaad Technologies!." />
    <meta name="author" content="Aminu Jatto AbdulQahhar, Irshaad Technologies" />
    <!--

    Author: Irshaad Technologies

    Website: http://www.irshaadtechnologies.com

    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="shortcut icon" href="PUT YOUR FAVICON HERE">-->

    <!-- Google Web Font Embed -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

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
               <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Menu</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="#" class="navbar-brand"><img src="images/ddddtemplatemo_logo.png" alt="Skylearn" title="Skylearn" /></a>
                        </div>
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                <li class="active"><a href="index.php#templatemo-top" class="external-link" target="_parent">HOME</a></li>
                                <li><a href="index.php#templatemo-welcome" class="external-link" target="_parent">ABOUT</a></li>
                                <li><a href="index.php#templatemo-contact" class="external-link" target="_parent">CONTACT</a></li>
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
                                                    <input type="password" class="form-control" name="password" placeholder="Password" required/>                                               </div>
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

        <div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">REGISTER @ </span><span class="txt_orange">SKYLEARN</span>
                    <p class="txt_slogan"><i>If you love what you SEE, feel free to REGISTER with us, AND ENJOY PRACTICING EXAMS WITH US...</i></p>
                </div>
                <div id="templatemo-contact">
                    <div class="container">
                        <div class="row">
                            <div class="templatemo-line-header head_contact" style="margin-top:0px;">
                                <div class="text-center">
                                    <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">JOIN US</span>
                                    <hr class="team_hr team_hr_right hr_gray"/>
                                </div>
                            </div>

                            <!-- Registration form -->
                            <form action="register_init.php" method="post"><!--TO reg_auth.php-->
                                <div class="row">
                                    <div class="col-lg-6 col-lg-offset-3">
                                        <div class="panel registration-form">
                                            <div class="panel-body">
                                                <div class="text-center">
                                                    <div class="icon-object border-success text-success"><i class="icon-plus3"></i><?php if(isset($_SESSION['message'])){echo $_SESSION['message'];unset($_SESSION['message']); }?></div>
                                                    <h5 class="content-group-lg"><small class="display-block">All fields are required</small></h5>
                                                </div>

                                              

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-user-check text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-user-check text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-user-lock text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm password">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-user-lock text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
												  <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <input type="email" class="form-control" name="email" placeholder="Email Address">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-mention text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>
												 <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <input type="text" class="form-control" name="username" placeholder="Username">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-mention text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  

                                                    
                                                </div>
												
												
												<div class="row">
												 <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <input type="text" class="form-control" name="gender" placeholder="Gender">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-mention text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <input type="number" class="form-control" name="phone" placeholder="phone">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-mention text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    
                                                </div>
												
												
												<div class="row">
												 <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <input type="text" class="form-control" name="state" placeholder="State">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-mention text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group has-feedback">
                                                            <input type="text" class="form-control" name="country" placeholder="Country">
                                                            <div class="form-control-feedback">
                                                                <i class="icon-mention text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    
                                                </div>
												

                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled" checked="checked">
                                                            Subscribe to monthly newsletter
                                                        </label>
                                                    </div>

                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="styled">
                                                            Accept <a href="#">terms of service</a>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="text-right">
                                                    <a href="javascript:history.go(-1);"><button type="button" class="btn btn-link"><i class="icon-arrow-left13 position-left"></i> Back to previous page</button></a>
                                                    <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10"><b><i class="icon-plus3"></i></b> Create account</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- /registration form -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /#templatemo-contact -->
            </div>
        </div> <!--welcome and contact-->

        <div class="templatemo-partners" >
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" style="margin-top:20px;">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">OUR CLIENTS</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center">
                        <div style="margin-top:60px;">
                            <ul class="list-inline">
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner1.jpg" class="img-responsive" alt="partner 1" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner2.jpg" class="img-responsive" alt="partner 2" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner3.jpg" class="img-responsive" alt="partner 3" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner4.jpg" class="img-responsive" alt="partner 4" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner5.jpg" class="img-responsive" alt="partner 5" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 templatemo-partner-item">
                                    <a href="#"><img src="images/partner6.jpg" class="img-responsive" alt="partner 6" /></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="templatemo-footer" >
            <div class="container">
                <div class="row">
                    <div class="text-center">

                        <div class="footer_container">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://facebook.com/aminjatto">
                                        <span class="social-icon-fb"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="social-icon-rss"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://mobile.twitter.com/jattorize">
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
                                <li>
                                    <a href="https://instagram.com/jatto_abdul">
                                        <span class="social-icon-instagram"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://skype.com/">
                                        <span class="social-icon-skype"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="height30"></div>
                            <a class="btn btn-lg btn-orange" href="#" role="button" id="btn-back-to-top">Back To Top</a>
                            <div class="height30"></div>
                        </div>
                        <div class="footer_bottom_content">
                            <span>Flat 4, Omobolaji House, Behind Olorunshogo, Ilorin, Kwara State, Nigeria.</span></br>
                            <span>Copyright © 2015 <a href="#">Irshaad Technologies</a></span></br>
                            <span>Design by <a title="Styleshout" href="http://www.irshaadtechnologies.com/">IrshaadTechnologies</a></span>
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
		<!-- template irshaad technologies-->
    </body>
</html>