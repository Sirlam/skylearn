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
            	<li class="active">
                	<a href="#">Home</a>
                </li>
                
                <li>
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

	<!--Page Container-->
	<div class="page-container">
    
    	<!--Page Content-->
    	<div class="page-content">
        
        	<!--Content Wrapper-->
        	<div class="content-wrapper">
            
            	<!--Content-->
            	<div class="content">
                	<div class="col-md-7">
							<form action="#">
								<div class="row">
									<div class="col-md-10 col-md-offset-1">
										<div class="panel panel-primary">
											<div class="panel-heading">
												<h5 class="panel-title">Leave a message</h5>
											</div>

											<div class="panel-body">
												<div class="form-group">
													<label>Enter your name:</label>
													<input type="text" class="form-control" placeholder="Name here">
												</div>

												<div class="form-group">
													<label>Enter your email:</label>
													<input type="email" class="form-control" placeholder="Email here">
												</div>
                                                
                                                <div class="form-group">
													<label>Subject:</label>
													<input type="email" class="form-control" placeholder="Subject here">
												</div>

												<div class="form-group">
													<label>Your message:</label>
													<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
												</div>

												<div class="text-right">
													<button type="submit" class="btn btn-primary">Send<i class="icon-arrow-right14 position-right"></i></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
                        
                        <div class="col-md-5">
                        	<div class="panel panel-warning">
                            	<div class="panel-heading">
                                	<h6 class="panel-title">CALL</h6>
                                </div>    
                                <div class="panel-body">
                                    <p>Available Monday through Friday 9am to 6pm</p>
                                    <p class="text-blue-700">080123456789, 070123456789</p>
                                </div>                        
                            </div>
                            
                            <div class="panel panel-flat">
                            	<div class="panel-heading">
                                	<h6 class="panel-title">ENQUIRIES</h6>
                                </div>    
                                <div class="panel-body">
                                    <p>For General, Feedback and Complaint Enquiries</p>
                                    <p class="text-blue-700">info@irshaadtech.com</p>
                                </div>                        
                            </div>
                            
                            <div class="panel panel-flat">
                            	<div class="panel-heading">
                                	<h6 class="panel-title">Address</h6>
                                </div>    
                                <div class="panel-body">
                                    <p>Irshaad Technologies<br>
									10, Alagomeji, Off Herbert Macaulay,<br>
									Yaba, Lagos.
									</p>
                                </div>                        
                            </div>
                            
                        </div>
                        
                        <!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="index.php">Online CBT</a> by <a href="javascript:void(0);" target="_blank">Irshaad Technologies</a>
					</div>
					<!-- /footer -->
                        
                </div><!--/content-->
                
            </div><!--/content-wrapper-->
            
        </div><!--/page-content-->
        
    </div><!--/page-container-->

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
