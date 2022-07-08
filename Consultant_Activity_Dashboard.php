<?php 	require_once('connect.php'); ?>

<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="default2.css">
<title>Consultant_Activity_Dashboard</title>
</head>

<body>
<div class="center">
<div id="div_header">
		<h1>Consultant Activity Dashboard</hr>
		</div>

		<p></p>
<br>

<?php
/*edit here*/

if (isset($_POST['ContractID'])) { 
		$CID=$_POST['ContractID'];
		$query= "SELECT ContractID FROM contract";	
		$result = mysqli_query($mysqli,$query);
		
	//	while ($row = mysqli_fetch_array($result)) 
        $row = mysqli_fetch_array($result);
			if ($_POST['ContractID'] =$row['ContractID']){				
				$query1= "SELECT ContractStat FROM Contract WHERE ContractID =$CID";	
			//	$result1 = $mysqli->query($query1);
			//	$result1 = mysqli_query($mysqli,$query1);
			//	$row = mysqli_fetch_array($result1);
			//	echo "#Contract Status: $row <br>";
			 session_start();
			$_SESSION['ContractID'] = $CID;
			
				if ($result1=$mysqli->query($query1)){
					$row1 =$result1->fetch_array();
					echo "Contract Status:" .$row1['ContractStat']; 
					echo "<br>";}
				
				
				$query2= "SELECT FinishDateOfContract FROM Contract WHERE ContractID =$CID";	
			//	$result2 = $mysqli->query($query2);
			//	echo "#Contract Expired Date: $result2 <br>";				
				if ($result2=$mysqli->query($query2)){
					$row2 =$result2->fetch_array();
					echo "Contract Expired Date:" .$row2['FinishDateOfContract']; }
			
			
			}
			else{
				echo"No ContractID is found";
				header("location: http://localhost/intern%20contract/Consultant_Activity_Dashboard_Pre.html/");
			
				}
}	


	?>
	<ul id="menu">
	<br></br>
	
	<a href="http://localhost/intern%20contract/ThankYou_Pre.html">  
       <input type="submit" value="Renew Contract" >  
     </a>
	
	<a href="http://localhost/intern%20contract/Sorry.php">  
       <input type="submit" value="Ignore Expired Contract" >  
     </a>
	 <br></br>
	 <a href="http://localhost/intern%20contract/Upload_New_Signed_Contract.php">  
       <input type="submit" value="Upload New Signed Contract" >  
     </a>
	 <p></p><br></br>
	 

	 
	 </ul>	
			</div>
	
</body>
</html>