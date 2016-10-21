<?php include "core.php";

?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<html lang="en">
<!--<![endif]-->
<head>

<!-- Basic Page Needs -->
<meta charset="utf-8">
<title>UTME EXAM</title>
<meta name="description" content="">
<meta name="author" content="Ansonika">

<!-- Favicons-->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" >
<link href="css/socialize-bookmarks.css" rel="stylesheet">
<link href="js/fancybox/source/jquery.fancybox.css?v=2.1.4" rel="stylesheet">
<link href="check_radio/skins/square/aero.css" rel="stylesheet">

<!-- Toggle Switch -->
<link rel="stylesheet" href="css/jquery.switch.css">

<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">

<!-- Google web font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Jquery -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.8.22.min.js"></script>

<!-- Wizard-->
<script src="js/jquery.wizard.js"></script>

<!-- Radio and checkbox styles -->
<script src="check_radio/check.min.js"></script>

<!-- HTML5 and CSS3-in older browsers-->
<script src="js/modernizr.custom.17475.js"></script>

<!-- Support media queries for IE8 -->
<script src="js/respond.min.js"></script>

<!-- script for the countdown timer -->
<script src="js/jquery.countdown360.js" type="text/javascript" charset="utf-8"></script>


</head>

<body>

<section id="top-area">
	<header>
         <div class="container">
            <div class="row">
        	
            
            <div class="btn-responsive-menu"> <span class="bar"></span> <span class="bar"></span> <span class="bar"></span> </div>

            <nav class="col-md-12" id="top-nav" class="pull-right">
            	<ul>
                    
                    <li><a href="#">Back to the home page</a></li>
               </ul>
            </nav><!-- End Nav -->
             
            
         </div><!-- End row -->
         </div><!-- End container -->
        </header> <!-- End header -->
        	
            <div class="container">
             <div class="row">
                 <div class="col-md-12 main-title">
                 
                 	
                 <h2>UTME EXAM TEST</h2>
                <p>Attempt all question and submit when you are done question.</p>
                </div>
       		</div>
            </div>
          
 </section>   
<style>
	
	label{
		
  margin-left: 60px;
  font-size: 18px;
  font-weight: 400;
  margin-top: 9px;
  line-height: 22px;
	}
	.price{
		
  top: 0;
  float:right;
  font-size: 15px;
  line-height: 30px;
  padding: 0 8px;
  background: #c00204;
  width:100px;
  color:white;
	}
	
	.sub{
		    border-radius: 3px;
    font-size: 18px;
    border: 2px solid #8dc63f;
    color: #8dc63f;
    padding: 15px 35px;
    text-decoration: none;
    transition: background .5s ease;
    -moz-transition: background .5s ease;
    -webkit-transition: background .5s ease;
    -o-transition: background .5s ease;
    display: inline-block;
    cursor: pointer;
    font-weight: 600;
    text-transform: uppercase;
    outline: none;
    background: #fff;
	}
</style>
<section class="container"  id="main">



<!-- Start Survey container -->	
<div id="survey_container">
	<div class="row">
			<div id="countdown"  class ="col-md-12" align="center" style="color:red;"></div><div class="col-md-6"></div>
	</div>

	
	<div id="top-wizard">
		<strong>Progress <span id="location"></span></strong>
		<div id="progressbar"></div>
		<div class="shadow"></div>
	</div><!-- end top-wizard -->
	
	
	
	<?php 
			
// Read answerkey.txt file for the answers to each of the questions.
function readAnswerKey($filename) {
	$answerKey = array();
	
	// If the answer key exists and is readable, read it into an array.
	if (file_exists($filename) && is_readable($filename)) {
		$answerKey = file($filename);
	}
	
	return $answerKey;
}


// Read the questions file and return an array of arrays (questions and choices)
// Each element of $displayQuestions is an array where first element is the question 
// and second element is the choices.

function readQuestions($filename) {
	$displayQuestions = array();
	
	if (file_exists($filename) && is_readable($filename)) {
		$questions = file($filename);
	
		// Loop through each line and explode it into question and choices
		foreach ($questions as $key => $value) {
			$displayQuestions[] = explode(":",$value);
		}				
	}
	else { echo "Error finding or reading questions file."; }
	
	return $displayQuestions;
}


// Take our array of exploded questions and choices, show the question and loop through the choices.
function displayTheQuestions($questions) {
	if (count($questions) > 0) {
		foreach ($questions as $key => $value) {?>
			
			
			
			<div class="step row">
				<div class="row">
					<h3 class="col-md-12"><?php echo $value[0];?></h3>
					<ul>
						<li>
						<?php 
			$choices = explode(",",$value[1]);
			foreach($choices as $value) {
				$letter = substr(trim($value),0,1);
				echo "<input type=\"radio\" name=\"$key\" value=\"$letter\"><h4>$value</h4>";
			}?>
							
						</li>
						</ul>
					
					</div><!-- end row -->
			</div><?php
			
			
			echo "<br/>";
		}
	}
	else { echo "No questions to display."; }
}


// Translates a precentage grade into a letter grade based on our customized scale.
function translateToGrade($percentage) {

	if ($percentage >= 90.0) { return "A"; }
	else if ($percentage >= 80.0) { return "B"; }
	else if ($percentage >= 70.0) { return "C"; }
	else if ($percentage >= 60.0) { return "D"; }
	else { return "F"; }
}
	
	
	?>
	
	
	
    
	<form name="example-1" id="wrapped" action="" method="POST">
		<div id="middle-wizard">
			<div class="step">
				<div class="row">
					<h3 class="col-md-12">What is the name of the first elected president of Nigeria ?</h3>
					
					<ul>
						
						<li>
							
								<input type="checkbox"/><h4>Abraham Lincoln</h4>
						</li>
						
						<li>
							
								<input type="checkbox"/><h4>Abraham Lincoln</h4>
						</li>
						
						
						<input type = "text"  value = "1" name = "check"/>
						
						
					</ul>
					
					
                    
					<div class="col-md-12">
						<ul class="data-list">
                 
                            <input id="website" name="website" type="text" value="" ><!-- Leave for security protection, read docs for details --></ul>
						
                    </div><!-- end col-md-6 -->
				</div><!-- end row -->
                
				
                
			</div><!-- end step-->
            
			
	<?php
	// Load the questions from the questions file
	$loadedQuestions = readQuestions("questions.txt");
	
	// Display the questions
	displayTheQuestions($loadedQuestions);
?><!-- end step -->
			
            
			
            
            
            
         
            
            
            
            
            
            
            
            
            
            
			
            
			<div class="submit step" id="complete">
                    	<i class="icon-check"></i>
						<h3>Are you sure you want to submit this test </h3>
						<input type ="submit" value="Submit Test"  class="sub" />
			</div><!-- end submit step -->
            
		</div><!-- end middle-wizard -->
        
		<div id="bottom-wizard">
			<button type="button" name="backward" class="backward">Backward</button>
			<button type="button" name="forward" class="forward">Forward </button>
		</div><!-- end bottom-wizard -->
	</form>
    
</div><!-- end Survey container -->
<div class="col-md-12">
	<div class="submit step" id="complete" align="center">
                    	<button type="submit" name="submitquiz" class="submit">Submit Test</button>
			</div>
			
			
			<!-- Process the question and answer here -->
			
			<?php

// This grades the quiz once they have clicked the submit button
if (isset($_POST['check'])) {
	

	// Read in the answers from the answer key and get the count of all answers.
	$answerKey = readAnswerKey("answerkey.txt");
	$answerCount = count($answerKey);
	$correctCount = 0;


	// For each answer in the answer key, see if the user has a matching question submitted
	foreach ($answerKey as $key => $keyanswer) {
		if (isset($_POST[$key])) {
			// If the answerkey and the user submitted answer are the same, increment the 
			// correct answer counter for the user
			if (strtoupper(rtrim($keyanswer)) == strtoupper($_POST[$key])) {
			
				$correctCount++;
			}
		}
	}


	// Now we know the total number of questions and the number they got right. So lets spit out the totals.
	echo "<br/><br/>Total Questions: $answerCount<br/>";
	echo "Number Correct: $correctCount<br/><br/>";

	if ($answerCount > 0) {

		// If we had answers in the answer key, translate their score to percentage
		// then pass that percentage to our translateGrade function to return a letter grade.
		$percentage = round((($correctCount / $answerCount) * 100),1);
		echo "Total Score: $percentage% (Grade: " . translateToGrade($percentage) . ")<br/>";
		
		 $grade = translateToGrade($percentage);
			$time = time();
		 $percentage = $percentage."%";
		 $totalquestion = $answerCount;
		 $totalscore = $correctCount;
		 $username = $_SESSION["username"];
		
		
		$query_result = mysql_query("INSERT INTO `examresults`(`username`,`cat`,`subjects`,`totalscore`,`totalquestion`,`percentage`,`grade`,`examdate`)VALUES('$username','waec','Maths','$totalscore','$totalquestion','$percentage','$grade','$time') ");
		
		if($query_result){
			header("location:scoreboard.php");
		}else{
			header("location:home.php");
		}
	}
	else {
		// If something went wrong or they failed to answer any questions, we have a score of 0 and an "F"
		echo "Total Score: 0 (Grade: F)";
		
		
	}
}

?>
			
			
			
	<div id="container">
			
			<script type="text/javascript" charset="utf-8">

		 	var countdown =  $("#countdown").countdown360({
       	 	radius      : 60,
         	seconds     : 5,
         	fontColor   : '#FFFFFF',
         	autostart   : false,
         	onComplete  : function () {  }
		   });
			countdown.start();
			console.log('countdown360 ',countdown);
			
			var type = $(this).attr("data-type");
		 		if(type === "time-remaining"){
		 			var timeRemaining = countdown.getTimeRemaining();
		 			if(timeRemaining == 2){
		 				alert("I am almost done");
		 			}
		 		}
			
		 	$(document).on("click","button",function(e){
		 		e.preventDefault();
		 		var type = $(this).attr("data-type");
		 		if(type === "time-remaining")
		 		{
		 			var timeRemaining = countdown.getTimeRemaining();
		 			alert(thimeRemaining);
		 		}
		 		else
		 		{
		 			var timeElapsed = countdown.getElapsedTime();
		 			alert(tifmeElapsed);
		 		}
		 		var timeRemaining = countdown.getTimeRemaining();
		 		
		 	});
		  </script>
		</div>
</div>

</section><!-- end section main container -->

<!-- Modal About -->


<!-- Modal About -->
<script>

	var pp = 0;
	
	$('.message').change(function(){ 
		if(this.checked == true){
			org =  $(this).attr("price");
			pp = pp + parseInt(org) ;
    		$('#result').text(pp);
			
		}else if(this.checked == false){
			org =  $(this).attr("price");
			pp = pp - parseInt(org) ;
    		$('#result').text(pp);
		}
		
	});
</script>

<!-- OTHER JS --> 
<script src="js/jquery.validate.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/jquery.tweet.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/quantity-bt.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/retina.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/functions.js"></script>

<!-- FANCYBOX -->
<script  src="js/fancybox/source/jquery.fancybox.pack.js?v=2.1.4" type="text/javascript"></script> 
<script src="js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5" type="text/javascript"></script> 
<script src="js/fancy_func.js" type="text/javascript"></script> 

</body>
</html>