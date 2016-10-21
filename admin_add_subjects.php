<?php include "core.php";?>
<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Skylar - Admin</title>

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
	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<?php include "admin_main_nav.php";?>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<?php include "admin_side_bar.php";?>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<?php 
								if(isset($_SESSION['message'])){
									echo $_SESSION['message'];
									unset($_SESSION['message']);
								}else{?>
								<h4> <span class="text-semibold">ADD SUBJECT</span> </h4>
								<?php }
							?>
							
						</div>

						
					</div>

					
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

										<!-- Basic table -->
					<div class="panel panel-flat">
						

						<div class="table-responsive">
							<form action="admin_add_subjects_init.php" method="post" class="center-block" style="padding:50px;" enctype="multipart/form-data">
                                <label>* Subject Name</label>
                                <select class="form-control" name = "title">
                                	<option>Mathematics</option>
                                    <option>English</option>
                                    <option>Physics</option>
                                    <option>Chemistry</option>
                                    
                                </select><br/>
                                <label>Category</label>
                                <select class="form-control" name = "cat">
                                	<option>UTME</option>
                                    <option>WAEC</option>
                                    <option>NECO</option>
                                    <option>TOEFL</option>
                                    <option>GRE</option>
                                    <option>SAT</option>
                                </select>
                                <label>* Duration</label>
								
                                <select class="form-control" name="duration">
                                	<option>10</option>
                                    <option>5</option>
                                    <option>2</option>
                                </select><br>
								<label>QUESTION FILE</label>
								
								<input type="file" name="image" /><br/>
								<label>ANSWER FILE</label>
								
								<input type="file" name="image2" /><br/>
								

                                <button class="btn btn-success">Submit</button>
                            </form>
						</div>
					</div>
					<!-- /basic table -->

                    
					<!-- Footer -->
					<?php include "footer.php";?>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->



</body>

</html>
