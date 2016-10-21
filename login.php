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
