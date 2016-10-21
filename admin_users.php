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
								<h4> <span class="text-semibold">VIEW USERS</span> </h4>
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
							<h5 class="panel-title">Registered Users</h5>
							<div class="heading-elements">
								
		                	</div>
						</div>
						<?php 
							$query_users = mysql_query("SELECT * FROM users LEFT JOIN examresults ON users.username=examresults.username ORDER BY users.id DESC");
							$num = mysql_num_rows($query_users);
						?>

						<div class="table-responsive">
						
							<table class="table table-bordered">
							
								<thead>
									<tr>
										<th>#</th>
										<th>First Name</th>
										<th>Last Name</th>
                                        <th>Email Id</th>
										<th>Username</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>Date Joined</th>
                                        
                                        <th>Recent Test</th>
                                        <th>Score</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                      </tr>
								</thead>
								<tbody>
								<?php 
									if($num == 0){
										echo "<h2>There are no users in this table</h2";
									}else{
									$x = 0;
										while($row = mysql_fetch_assoc($query_users)){
											$firstname = $row['firstname'];
											$lastname = $row['lastname'];
											$email = $row['email'];
											$tel =$row['tel'];
											$state = $row['state'];
											$country = $row['country'];
											$datereg = $row['timeofreg'];
											$timeofreg = date('D M Y',$datereg);
											$percentage = $row['percentage'];
											$subjects = $row['subjects'];
											$cat = $row['cat'];
											$username = $row['username'];
											
											$x++;
											
										
								?>
									<tr>
										<td><?php echo $x;?></td>
										<td><?php echo $firstname;?></td>
										<td><?php echo $lastname;?></td>
										<td><?php echo $email;?></td>
                                        <td><?php echo $username;?></td>
                                        <td><?php echo $country;?></td>
                                        <td><?php echo $state;?></td>
                                        <td><?php echo $timeofreg;?></td>
                                        
                                        <td><?php echo $cat;?></td>
                                        <td><?php echo $percentage;?></td>
                                        <td>Active</td>
                                        <td><a href="#">Deactivate</a></td>
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
