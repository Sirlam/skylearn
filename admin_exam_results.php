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
								<h4> <span class="text-semibold">VIEW RESULTS</span> </h4>
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
						<div class="panel-heading">
							<h5 class="panel-title">Exam Results</h5>
							
						</div>

						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>#</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
                                        <th>Category</th>
										<th>Subjects</th>
                                        <th>Total Marks (%)</th>
                                        <th>Grade</th>
                                        
                                        <th>Exam Date</th>
                                      </tr>
								</thead>
								<tbody>
								<?php 
								$query = mysql_query("SELECT * FROM examresults LEFT JOIN users ON examresults.username=users.username ORDER BY users.id DESC");
								
								
									$num = mysql_num_rows($query);
									$num = mysql_fetch_assoc($query);
											if($num == 0){
												echo "<h2>There are no users in this table.</h2";
												}else{
												$x = 0;
													while($row = mysql_fetch_assoc($query)){
														$firstname = $row['firstname'];
														$lastname = $row['lastname'];
														$subject = $row['subjects'];
														$totalquestion = $row['totalquestion'];
														$cat = $row['cat'];
														$email = $row['email'];
														$score = $row['totalscore'];
														$subjects = $row['subjects'];
														$grade = $row['grade'];
														$percentage = $row['percentage'];
														$dateofexam = $row['examdate'];
														$ddd = date('D, M jS, Y',$dateofexam);
													$x++;
												
												
								?>
									<tr>
										<td><?php echo $x;?></td>
										<td><?php echo $firstname;?></td>
										<td><?php echo $lastname;?></td>
										<td><?php echo $email;?></td>
										<td><?php echo $cat;?></td>
										<td><?php echo $subjects;?></td>
                                        <td><?php echo $percentage;?></td>
                                        <td><?php echo $grade;?></td>
                                        <td><?php echo $ddd;?></td>
									</tr>
								<?php }
												}?>
								</tbody>
							</table>
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
