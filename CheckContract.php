<?php
// connect to the database
$mysqli = mysqli_connect('localhost', 'root', '', 'contract');
if ($mysqli->connect_errno){
	echo $mysqli->connect_errno.": ".$mysqli->connect_error;
}
			
		
	if (isset($_POST['ContractID'])) { 
		$CID = $_POST['ContractID'];
		$query= "SELECT ContractID FROM contract";	
	
		$result = mysqli_query($mysqli,$query);

		while ($row = mysqli_fetch_array($result)) 
        {
			if ($_POST['ContractID'] =$row['ContractID']){
				
				
				header("location: http://localhost/intern%20contract/Edit_the_old_contract_Post.html")
				;}
			else{
				echo"No ContractID is found";}
        }
}
	
		?>