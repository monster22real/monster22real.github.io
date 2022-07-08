<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="default2.css">
<title>Thank You</title>
</head>

<body>
<div id="div_header">
			End Contract
		</div>
		<p></p>
<div class="center">


<?php
	
	echo "Thank you for being a partner with us and we are looking forward to seeing you once again.";
		?>
		<ul id="menu">
		
		<form action="ConsultantResponse.php" method="post"> 
		
					<h2>Please Provide Us A Reason Why:</h2>
					
					<input type="radio" id="reason1" name="reason" value="I got a new job.">
					<label for="reason1">I got a new job.</label><br>
					<input type="radio" id="reason2" name="reason" value="I have personal issues.">
					<label for="reason2">I have personal issues.</label><br>
					<input type="radio" id="reason3" name="reason" value="I want to change role.">
					<label for="reason3">I want to change role.</label><br>
					<input type="radio" id="reason4" name="reason" value="I want to change workplace.">
					<label for="reason4">I want to change workplace.</label><br>
					<input type="radio" id="reason5" name="reason" value="Others">
					
					<label for="reason5" id="reason5" name="reason" value="Others">
						<input type="text" name="others" placeholder="Other Reasons Type Here"></label>
					
			<!--		
					<label for="reason1"> I got a new job.</label><br>
					<input type="checkbox" id="reason2" name="reason2" value="I have personal issues.">
					<label for="reason2"> I have personal issues.</label><br>
					<input type="checkbox" id="reason3" name="reason3" value="I want to change role.">
					<label for="reason3"> I want to change role.</label><br>
					<input type="checkbox" id="reason4" name="reason4" value="I want to change workplace.">
					<label for="reason4"> I want to change workplace.</label><br>
					<label type="checkbox" id="other" name="reason5" value="Others">
						<input type="text" name="others" placeholder="Other Reasons Type Here"></label>
			-->	
					<input type="submit" value="Submit">
		
		</form>
			
			</ul>
		
		
		
		 </div>
</body>
</html>