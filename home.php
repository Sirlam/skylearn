<?php include "core.php";
	$username = $_SESSION['username'];
	$query_last_result = mysql_query("SELECT * FROM `examresults` WHERE `username`='$username' ORDER BY `id` DESC");
	$row = mysql_fetch_assoc($query_last_result);
		$subject = $row['subjects'];
		$totalquestion = $row['totalquestion'];
		$category = strtoupper($row['cat']);
		$score = $row['totalscore'];
		$grade = $row['grade'];
		$percentage = $row['percentage'];
		$dateofexam = $row['examdate'];
		$ddd = date('D, M jS, Y',$dateofexam);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Skylearn - Home</title>

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
        <?php
			include "main_nav.php";
 ?>
        <!-- /main navbar -->

        <!-- Page container -->
        <div class="page-container">

            <!-- Page content -->
            <div class="page-content">

                <!-- Main sidebar -->
                <?php
					include "sidebar.php";
				?>
                <!-- /main sidebar -->

                <!-- Main content -->
                <div class="content-wrapper">

                    <!-- Page header -->
                    <div class="page-header">
                        <div class="page-header-content">
                            <div class="page-title">
                                <h4>Dashboard</h4>
                            </div>

                            <div class="heading-elements">
                                <div class="heading-btn-group">
                                    <a href="ask.php" class="btn btn-link btn-float has-text" ><i class="text-primary"></i><span >
									
									
									<button class="btn btn-info">Ask a question</button></a></span>
                                   
                                </div>
                            </div>
                        </div>

                        
                    </div>
                    <!-- /page header -->

                    <!-- Content area -->
                    <div class="content">

                        <!-- Main charts -->

                        <!-- /main charts -->

                        <!-- Dashboard content -->
                        <div class="row">
                            <div class="col-lg-8">

                                <!-- Marketing campaigns -->

                                <!-- /marketing campaigns -->

                                <!-- Quick stats boxes -->
                                <div class="row">
                                    <div class="col-lg-4 col-md-2 col-sm-2">

                                        <!-- Members online -->
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="heading-elements">

                                                </div>
                                                 <a href="confirm_exam.php?exam=UTME"><img src="images/jamb.png" data-toggle="modal" data-target="#modal_utme" id="zunaki" class="center-block img-responsive"/></a>
                                                
                                                <h3 class="no-margin text-center">UTME</h3>
                                                

                                            </div>

                                        </div>
                                        <!-- /members online -->

                                    </div>

                                    <div class="col-lg-4 col-md-2 col-sm-2">

                                        <!-- Current server load -->
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="heading-elements">

                                                </div>
                                                 <a href="confirm_exam.php?exam=WAEC"><img src="images/waec.png" data-toggle="modal" data-target="#modal_waec" class="center-block img-responsive"/></a>

                                                <h3 class="no-margin text-center">WAEC</h3>
                                                

                                            </div>

                                        </div>
                                        <!-- /current server load -->

                                    </div>

                                    <div class="col-lg-4 col-md-2 col-sm-2">

                                        <!-- Today's revenue -->
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="heading-elements">

                                                </div>
                                                 <a href="confirm_exam.php?exam=NECO"><img src="images/neco.png" data-toggle="modal" data-target="#modal_neco" class="center-block img-responsive"/></a>

                                                <h3 class="no-margin text-center">NECO</h3>
                                                </div>

                                            <div id="today-revenue"></div>
                                        </div>
                                        <!-- /today's revenue -->

                                    </div>
                                    <div class="col-lg-4 col-md-2 col-sm-2">

                                        <!-- Today's revenue -->
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="heading-elements">

                                                </div>
                                                <a href="confirm_exam.php?exam=TOEFL"><img src="images/toefl.png" class="center-block img-responsive"/></a>

                                                <h3 class="no-margin text-center">TOEFL</h3>
                                                

                                            </div>

                                            <div id="today-revenue"></div>
                                        </div>
                                        <!-- /today's revenue -->

                                    </div>
                                    <div class="col-lg-4 col-md-2 col-sm-2">

                                        <!-- Today's revenue -->
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="heading-elements">

                                                </div>
                                                <a href="confirm_exam.php?exam=GRE"><img src="images/GRE.png" class="center-block img-responsive"/></a>

                                                <h3 class="no-margin text-center">GRE</h3>
                                                

                                                <!-- Modal -->
                                                

                                            </div>

                                            <div id="today-revenue"></div>
                                        </div>
                                        <!-- /today's revenue -->

                                    </div>
                                    <div class="col-lg-4 col-md-2 col-sm-2">

                                        <!-- Today's revenue -->
                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="heading-elements">

                                                </div>
                                                 <a href="confirm_exam.php?exam=SAT"><img src="images/SAT.png" class="center-block img-responsive"/></a>

                                                <h3 class="no-margin text-center">SAT</h3>

                                            </div>

                                            <div id="today-revenue"></div>
                                        </div>
                                        <!-- /today's revenue -->

                                    </div>
                                </div>
                                <!-- /quick stats boxes -->

                                <!-- Support tickets -->
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">Score from last test </h6>
                                        <div class="heading-elements">
                                          <?php echo $ddd;?> 
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-xlg text-nowrap">
                                            <tbody>
                                                <tr>
                                                    <td class="col-md-3">
                                                    <div class="media-left media-middle">
                                                        <div id="tickets-status"></div>
                                                    </div>
                                                    <div class="media-left">
                                                        <h5 class="text-semibold no-margin"><?php echo $category;?><small class="text-success text-size-base"></h5>
                                                        <span class="text-muted"><span class="status-mark border-success position-left"></span> Exam Body</span>
                                                    </div></td>

                                                    <td class="col-md-3">
                                                    <div class="media-left media-middle">
                                                        <a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon"><i class="icon-alarm-add"></i></a>
                                                    </div>
                                                    <div class="media-left">
                                                        <h5 class="text-semibold no-margin"> <?php echo $score."/".$totalquestion; ?><small class="display-block no-margin">Answered questions</small></h5>
                                                    </div></td>
													<td class="col-md-3">
                                                    <div class="media-left media-middle">
                                                        <a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon"><i class="icon-alarm-add"></i></a>
                                                    </div>
                                                    <div class="media-left">
                                                        <h5 class="text-semibold no-margin"><?php echo $percentage?><small class="display-block no-margin">Final Score</small></h5>
                                                    </div></td>

                                                    <td class="col-md-3">
                                                    <div class="media-left media-middle">
                                                        <a href="#" class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-xs btn-icon"><i class="icon-alarm-add"></i></a>
                                                    </div>
                                                    <div class="media-left">
                                                        <h5 class="text-semibold no-margin"><?php echo $grade;?><small class="display-block no-margin">Final Grade</small></h5>
                                                    </div></td>

                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                
                                            </thead>
                                            <tbody>
                                                <tr class="active border-double">
                                                    <td colspan="3">Latest Post from Forum </td>
                                                    <td class="text-right"><span class="badge bg-blue"></span></td>
                                                </tr>
												<?php 
													$query_question = mysql_query("SELECT * FROM questions JOIN users ON questions.username = users.username ORDER BY questions.id DESC LIMIT 4");
													
													while($row = mysql_fetch_assoc($query_question)){
														$fname = $row["firstname"];
														$lname = $row["lastname"];
														$title = $row["title"];
														$unique_id = $row["uniqueid"];
													
												?>

                                                <tr>
                                                    <td class="text-center"><h6 class="no-margin">12 <small class="display-block text-size-small no-margin">hours</small></h6></td>
                                                    <td>
                                                   
                                                    <div class="media-body">
                                                        <a href="questions.php?key=<?php echo $unique_id;?>" class="display-inline-block text-default text-semibold letter-icon-title"><?php echo $fname." ".$lname?></a>
                                                        
                                                    </div></td>
                                                    <td><a href="questions.php?key=<?php echo $unique_id;?>" class="text-default display-inline-block"> <span class="text-semibold"> <?php echo $title;?></span> </a></td>
                                                    <td class="text-center">
                                                    </td>
                                                </tr>
												
												<?php } ?>

                                                
											
                                                
                                                

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /support tickets -->

                                <!-- Latest posts -->

                                <!-- /latest posts -->

                            </div>

                            <?php include "nav_right.php";?>
                        </div>
                        <!-- /dashboard content -->

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
	<script>
		$("#zunaki").click(function(){
			$(this).show('slide', {direction: 'left'}, 1400);
		});
	</script>
    </body>


</html>
