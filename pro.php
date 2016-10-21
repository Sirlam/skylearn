<?php

// This grades the quiz once they have clicked the submit button
if (isset($_POST['submitquiz'])) {

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
		
		echo $grade = translateToGrade($percentage)."<br/>";
		$time = time();
		echo $percentage = $percentage."%<br/>";
		echo $totalquestion = $answerCount."<br/>";
		echo $totalscore = $correctCount."<br/>";
		
		
		$query = mysql_query("INSERT INTO `examresults`(`username`,`cat`,`subjects`,`totalscore`,`totalquestion`,`percentage`,`grade`,`examdate`)VALUES('$username','waec','Maths','$totalscore','$totalquestion','$percentage,,'$grade','$time') ");
	}
	else {
		// If something went wrong or they failed to answer any questions, we have a score of 0 and an "F"
		echo "Total Score: 0 (Grade: F)";
		
		
	}
}

?>