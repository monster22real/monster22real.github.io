<!--  How to upload a file and save in the mysql    -->
<!--  How does the file is saved    -->



<?php include 'filesLogic.php';?>



<!DOCTYPE html>
<html lang="en">
<head>
  
<link rel="stylesheet" href="default2.css">
<title>Upload_New_Signed_Contract</title>
</head>

<body>

<div id="div_header">
			Upload_New_Signed_Contract
		</div>
		<p></p>
<div class="center">

		<ul id="menu">
			<div class="container">
				<div class="row">
					<form action="Upload_New_Signed_Contract.php" method="post" enctype="multipart/form-data" >
					<h3>Upload File</h3>
					<input type="file" name="myfile"> <br><p></p>
					<button type="submit" name="save">upload</button>
					</form>
				</div>
			</div>
		 
		</ul>
							<p></p><p></p>
							<br> </br><br> </br><br> </br><br> </br>
		<ul>	
				<li><a href="Consultant_Activity_Dashboard.php">Back to Acitivity Dashboard</a></li>
				
				<li><a href="Log_in.html">Log Out</a></li>
								
		</ul>		
		
		
</div>
</body>
</html>