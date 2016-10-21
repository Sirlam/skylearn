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
        <title>Skylearn - Questions</title>

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
                                <h4>All Questions</h4>
                            </div>

                            <div class="heading-elements">
                                <div class="heading-btn-group">
                                    <a href="#" class="btn btn-link btn-float has-text" ><i class="text-primary"></i><span style="color:red;"><?php if(isset($_SESSION["temp"])){
									echo "<span style='color:red;'>Your account is not your activated, Go to your email to activate your account</span>";
									
									}else{
										echo "<button class='btn btn-primary'>Ask me a question</button>";
									}
								?></span></a>
                                   
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
                                
                                <!-- /quick stats boxes -->

                                <!-- Support tickets -->
                                <div class="panel panel-flat">
                                    

                                    
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                
                                            </thead>
                                            <tbody>
                                                
												<?php 
													$query_question = mysql_query("SELECT * FROM questions JOIN users ON questions.username = users.username ORDER BY questions.id DESC LIMIT 15");
													
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

                            <div class="col-lg-4">

                                <!-- Progress counters -->
                                <div class="row">
                                    <div class="col-md-12">
                                    	

                                        <!-- Available hours -->
                                        <div class="panel text-center">
                                        	Monday, 20th june 2014
                                            
                                        </div>
                                        <!-- /available hours -->

                                    </div>

                                    
                                </div>
                                <!-- /progress counters -->

                                <!-- Daily sales -->

                                <!-- /daily sales -->

                                <!-- My messages -->
                                <div class="panel panel-flat">
                                    

                                  
                                    <!-- Area chart -->
                                    <div id="messages-stats"></div>
                                    <!-- /area chart -->

                                    <!-- Tabs -->
                                    <ul class="nav nav-lg nav-tabs nav-justified no-margin no-border-radius bg-indigo-400 border-top border-top-indigo-300">
                                        <li class="active">
                                            <a href="#messages-tue" class="text-size-small text-uppercase" data-toggle="tab"> Feeds </a>
                                        </li>

                                      
                                    </ul>
                                    <!-- /tabs -->

                                    <!-- Tabs content -->
                                    <div class="tab-content">
                                        <div class="tab-pane active fade in has-padding" id="messages-tue">
                                            <ul class="media-list">
                                                
                                                
                                                <?php 
												$query_feeds = mysql_query("SELECT * FROM examresults INNER JOIN users ON examresults.username=users.username ORDER BY examresults.id DESC LIMIT 4");
												if(!$query_feeds){
													echo mysql_error();
												}
												
												while($row1 = mysql_fetch_assoc($query_feeds)){
													
												

												?>
                                                 
                                                 <li class="media" style="border-left: solid 5px #ddd; box-shadow: 2px 2px 2px #888888;border-bottom-right-radius:5px;border-top-right-radius:5px">
                                                	<div >
    
                                                	</div>
                                                    <div class="media-body"style='border: solid 1px #ddd;padding:10px;;'>
                                                        <a href="#"> <?php echo $row1['firstname']." ".$row1['lastname'];?><span class="media-annotation pull-right">14:58</span> </a>
                                                        <div style="clear: both;"></div>
                                                        <div class="display-block text-muted pull-left">Attempted <strong style="color:red;"><?php echo $row1['subjects']?>  </strong> in  <strong style="color:red;"><?php echo strtoupper($row1['cat']);?> </strong> 
                                                        </div>
                                                        <div class="display-block text-muted pull-right"><?php echo $row1['percentage'];?> </div>
                                                    </div>
                                                </li>
                                                <?php }?>

                                                </ul>
                                        </div>

                                        

                                        
                                    </div>
                                    <!-- /tabs content -->

                                </div>
                                <!-- /my messages -->

                                <!-- Daily financials -->
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">Sponsored Ad</h6>
                                        <img src="images/ad.jpg"  width="350" height="200"/><br /><br />
                                        
                                         <img src="images/ad.jpg"  width="350" height="200"/>
                                        
                                    </div>

                                    <div class="panel-body">
                                        <div class="content-group-xs" id="bullets"></div>

                                       
                                    </div>
                                </div>
                                <!-- /daily financials -->

                            </div>
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
