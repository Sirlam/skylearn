<!DOCTYPE html>
<html lang="en">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Skylar</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/dashboard.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php"><img src="assets/images/logo_light.png" alt=""></a>
		</div>

		<div class="navbar-collapse collapse navbar-right" id="navbar-mobile">
			<ul class="nav navbar-nav">
            	<li>
                	<a href="#">Home</a>
                </li>
                
                <li class="active">
                	<a href="about.php">About Us</a>
                </li>
            
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    	<i class="icon-user-block"></i>
						Login
					</a>
					
					<div class="dropdown-menu dropdown-content">

						<ul class="media-list dropdown-content-body width-350">
							<li class="media">
								<div class="media-body">
									<form action="home.php">
                                    	<div class="form-group has-feedback has-feedback-left">
											<input type="text" class="form-control" placeholder="Username" required>
											<div class="form-control-feedback">
												<i class="icon-user text-muted"></i>
											</div>
										</div>

										<div class="form-group has-feedback has-feedback-left">
											<input type="password" class="form-control" placeholder="Password" required>
											<div class="form-control-feedback">
												<i class="icon-lock2 text-muted"></i>
											</div>
										</div>

										<div class="form-group">
											<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
										</div>
                                        
                                        <div class="text-center">
                                        	New User? <a href="register.php">Register here</a>
                                        </div>

										<div class="text-center">
											<a href="passwordrecover.php">Forgot password?</a>
										</div>
                                    </form>
								</div>
							</li>
						</ul>
					</div>
				</li>
                
                <li>
                	<a href="contact.php">Contact Us</a>
                </li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">
                
					<!-- About Section -->
                    <div class="container">
                    	<div class="row">
                        
                        	<!--About Content-->
                        	<div class="col-md-7">
                            	<div class="panel panel-primary">
                                	<div class="panel-heading"> <h6 class="panel-title">About Online CBT</h6> </div>
                                    <div class="panel-body">
                                    	<p>
                                        	Online CBT was an idea developed at the Skylar Hackaton 2015 challenge. It is an online platform for youths, admission seekers, students to practice exam test on the go regardless of constraints such as poor internet connectivity, device specifications etc.
                                        </p>
                                        <p> This platform was designed in such a way that it caters for most exams taken by Nigerian Students. We have partnered with top organizations inorder to make it as easy and as user-friendly as possible</p>
                                        <h6 class="panel-title">Key Features</h6>
                                        <ul>
                                        	<li>Easy to use</li>
                                            <li>Friendly Interface</li>
                                            <li>Instant Scoring</li>
                                            <li>Timer Options</li>
                                            <li>Loads of Past Questions</li>
                                            <li>Social Networking</li>
                                        </ul>
                                        <h6 class="panel-title">How to use</h6>
                                        <ol>
                                        	<li>New User: Register your account <a href="register.php">here</a></li>
                                            <li>Registered User: Login to your account above</li>
                                            <li>An account profile and dashboard will be created for you. You can select your exam category directly from there e.g JAMB, TOEFL</li>
                                            <li>Also select the exam subjects (4 maximum) and you will be directed to the test arena</li>
                                            <li>After taking the test, a result dashboard will be generated for you. You can share this with your friend on social network and invite them also.</li>
                                        </ol>
                                        <img class="img-responsive pull-left" src="assets/images/jamb.png" style="margin-right:30px;"/>   
                                        <img class="img-responsive pull-left" src="assets/images/waec.png" style="margin-right:30px;"/>
                                        <img class="img-responsive pull-left" src="assets/images/neco.png" style="margin-right:30px;"/>                                        
                                        <img class="img-responsive pull-left" src="assets/images/toefl.png"style="margin-top:20px;"/>                                    
                                        </div>
                                </div>
                            </div><!--/about content-->
                            
                            <!--Useful Resources and links-->
                            <div class="col-md-5">
                            	<div class="panel panel-warning">
                                	<div class="panel-heading"><h6 class="panel-title">Links</h6></div>
                                    <div class="panel-body">
                                    	<ul>
                                        	<li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="contact.php">Contact Us</li>
                                            <li><a href="register.php">Register</a></li>
                                        </ul>
                                        <h6 class="panel-title">Online Resources</h6>
                                        <ul>
                                        	<li><a href="http://jamb.org.ng" target="_blank">JAMB</a></li>
                                            <li><a href="http://waecnigeria.org" target="_blank">WAEC</a></li>
                                            <li><a href="http://waecdirect.org" target="_blank">WAEC Result Checker</a></li>
                                            <li><a href="http://mynecoexams.com" target="_blank">NECO</a></li>
                                            <li><a href="http://ets.org/toefl" target="_blank">TOEFL</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--/Useful Resources and links-->
                        </div>
                 	</div>
					<!-- /about section -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="index.php">Online CBT</a> by <a href="javascript:void(0);" target="_blank">Irshaad Technologies</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5085980-2', 'auto');
  ga('send', 'pageview');

</script>

</body>

</html>
