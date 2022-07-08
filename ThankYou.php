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
			Renew Contract
		</div>
		<p></p>
<div class="center">
<?php
	echo "Thank you for choosing renewing the contract. <br>";

	
	if (isset($_SESSION['ContractID'])) {
		$ContractRenew='Renew';
		$query= "Update Contract Set ContractRenew='" .$ContractRenew."' Where ContractID='".$_SESSION['ContractID']. "'";


		if (mysqli_query($links,$query)){
				echo "We will update to HR and let HR making direct communication with you later.";
		}
		
					}
	
	
	
	
	
	
		?>
		<ul id="menu">
							<p></p><p></p>
							<br> </br><br> </br><br> </br><br> </br>
			
				<li><a href="Consultant_Activity_Dashboard_Pre.html">Back to Acitivity Dashboard</a></li>
				<li><a href="Log_in.html">Log Out</a></li>
			</ul>		
		
		
		 </div>
</body>
</html>