<?php include "core.php";?>
<!DOCTYPE html>
<html lang="en">


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
	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<?php include "main_nav.php"; ?>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<?php include "sidebar.php"; ?>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Content area -->
			  <div class="content">

					<!-- Scoreboard div -->
					<div class="row">
                    	<div class="col-lg-7 col-lg-offset-2">
                        	<div class="panel registration-form">
							<?php
											$username = $_SESSION['username'];
											$query = mysql_query("SELECT * FROM `examresults` WHERE `username`= '$username' ORDER BY `id` DESC");
											$num = mysql_fetch_assoc($query);
											if($num == 0){
												
												}else{
												
													$row = mysql_fetch_assoc($query);
														$subject = $row['subjects'];
														$totalquestion = $row['totalquestion'];
														$category = $row['cat'];
														$score = $row['totalscore'];
														$grade = $row['grade'];
														$percentage = $row['percentage'];
														$dateofexam = $row['examdate'];
														$ddd = date('D, M jS, Y',$dateofexam);
													
												}
											
											
										?>
									<div class="panel-body">
										<div class="text-center">
											<div class="icon-object border-success text-success"><i class="icon-book"></i></div>
											<h5 class="content-group-lg">Your score <small class="display-block"><?php echo strtoupper($category);?></small></h5>
                                        </div>
										
										
										
										
										
										
                                        <table class="table">
                                        	<thead>
                                            	<tr>
                                                	<th>Subjects</th>
                                                	<th>Total Questions</th>
                                                	<th>Correct Answers</th>
                                                    <th>Score</th>
                                                    <th>Grade</th>
                                                    
                                                    <th>date</th>
													
                                                </tr>
                                            </thead>
                                            <tbody>
											
											
                                            	<tr class="active">
                                                	<td><?php echo $subject;?></td>
                                                    <td><?php echo $totalquestion;?></td>
                                                    <td><?php echo $score;?></td>
                                                    <td><?php echo $percentage;?></td>
                                                    <td><?php echo $grade;?></td>
                                                    <td><?php echo $ddd;?></td>
                                                   
                                                </tr>
                                                
                                                
                                            </tbody>
                                        </table>
                                        <div class="clearfix"><br></div>
                                        <!--Share Div-->
                                        <div class="col-lg-4">
                                        	<button type="submit" class="btn btn-primary btn-labeled btn-labeled-right ml-10"><b><i class="icon-facebook"></i></b> Share on facebook</button>
                                        </div>
                                        <div class="col-lg-4">
                                        	<button type="submit" class="btn btn-danger btn-labeled btn-labeled-right ml-10"><b><i class="icon-twitter"></i></b> Share on twitter</button>
                                        </div>
                                        <div class="col-lg-4">
                                        	<button type="submit" class="btn btn-success btn-labeled btn-labeled-right ml-10"><b><i class="icon-instagram"></i></b> Share on instagram</button>
                                        </div>
                                        <!--/share div-->
                                    </div>
							</div>
                        </div>                    
                    </div>			
					<!-- /Scoreboard Div -->


					<!-- Footer -->
					<?php include "footer.php"; ?>
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
