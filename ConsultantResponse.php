
<?php 	
		session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
?>

<?php
$links = new mysqli('localhost','root','','Contract');
   if($links->connect_errno){
      echo $links->connect_errno.": ".$links->connect_error;
   }
 ?>

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
	
	
	
	if (isset($_SESSION['ContractID'])) {
		$ConsultantComment=$_POST['reason'];
		$query= "Update Contract Set ConsultantComment='" .$ConsultantComment."' Where ContractID='".$_SESSION['ContractID']. "'";


		if (mysqli_query($links,$query)){
				echo "Thank you for telling us the reason and we hope to see you once again.";
		}
		
					}
	
	
		?>
		<ul id="menu">
		
		
				
							 </br><br> </br><br> </br>
			
				<li><a href="Consultant_Activity_Dashboard_Pre.html">Back to Acitivity Dashboard</a></li>
				<li><a href="Log_in.html">Log Out</a></li>
			</ul>
		
		
		
		 </div>
</body>
</html>