<?php include "core.php";
$key = $_GET['key'];

$query = mysql_query("SELECT * FROM questions JOIN users ON questions.username=users.username");
$query_comments = mysql_query("SELECT * FROM comments JOIN users ON comments.username=users.username");
$comments_num = mysql_num_rows($query_comments);


$row = mysql_fetch_assoc($query);
$title = $row['title'];
$first_name = $row['firstname'];
$last_name = $row['lastname'];
$date = $row['time'];
$ddd = date('D, M jS, Y',$date);


 ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ask Forum</title>

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
							<?php 
								if(isset($_SESSION['message'])){
									echo $_SESSION['message'];
									unset($_SESSION['message']);
								}else{?>
									<h4>Ask item</h4>
								<?php
								}
							?>
                                
                            </div>

                            <div class="heading-elements">
                                <div class="heading-btn-group">
                                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
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
                                <!-- Support tickets -->
                                <div class="panel panel-flat">
                                    <div class="" style="padding:20px;">
                                        <p><?php echo "<h3>".$title."</h3>"; ?>
                                       
                                        </p>
                                    </div>
                                </div>
                                <!--ask -->
                                <div class="panel panel-flat">
                                    <div class="comment" style="padding:20px;">
                                            <div class="name">Name of Author: <b><?php echo $first_name." ".$last_name;?></b></div>
                                            <div class="title"><i>Date Added: </i><b><?php echo $ddd;?></b></div>
                                        
                                     </div>
                                </div>
                                <!-- comment -->
                                <div class="panel panel-flat panel-body" id="addCommentContainer">
                                	<div class="text-center">
                                        <div class="content-divider text-muted"><span>Add Comment</span></div>
                                    </div>
                                    
                                    <form id="addCommentForm" method="post" action="comment_init.php?key=<?php echo $key;?>" style="padding:20px;">
                                        <div class="form-group has-feedback has-feedback-left">
                                            <label for="comment">Comment:</label>
                                        </div>
                                        
                                        <div class="form-group has-feedback has-feedback-left">
                                            <textarea class="form-control" rows="7" name="comment" id="comment" ></textarea>
                                        </div>
                                        
                                        <div>    
                                            <button type="submit" class="btn btn-primary" id="submit">Add <span class="icon icon-plus3"></span></button>
                                        </div>
                                    </form>
                                </div>
                                
                                 <div class="panel panel-flat panel-body">
                                	<div class="text-center">
                                        <div class="content-divider text-muted"><span>Other Comments</span></div>
                                    </div>
                                    
                                    <table class="table table-responsive table-framed">
                                    	
                                        <tbody>
										
											<?php if($comments_num == 0){
												echo "There are no answers to this question, Be the first to answer";
											}else{
											
											?>
											<thead>
                                        	<tr>
                                        		<th>User</th>
                                            	<th>Comment</th>
                                            </tr>
                                        </thead>
											<?php
											
												while($row2 = mysql_fetch_assoc($query_comments)){
												$fname = $row2['firstname'];
												$lname = $row2['lastname'];
												$comment = $row2['comment'];
												
												
											
											?>
												<tr>
													<td class="text-blue-700"><?php echo $fname." ".$lname?></td>
													<td><?php echo $comment?></td>
												</tr>
											<?php
												}
											
											}
											

											?>
                                        	
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <?php include "nav_right.php";?>
                        </div>
                        <!-- /dashboard content -->

                        <!-- Footer -->
                        <?php include "footer.php;"?>
                        <!-- /footer -->

                    </div>
                    <!-- /content area -->

                </div>
                <!-- /main content -->

            </div>
            <!-- /page content -->

        </div>         <!-- /page container -->     <script>
$("#zunaki").click(function(){             $(this).show('slide',
{direction: 'left'}, 1400);         });     </script>     </body>
</html>
