







<?php
$Consultantname="Consultant";
$Consultantpassword="Consultant123";
$HRname="HR";
$HRpassword="HR123";
$Adminname="Admin";
$Adminpassword="Admin123";

	$username = $_POST["username"];
	$passwd = $_POST["passwd"];

	

	if(isset($_POST['username']) && $_POST['username'] == $Consultantname && $_POST['passwd'] == $Consultantpassword)
{
    header("location: Consultant_Activity_Dashboard_Pre.html");
	exit;
}
	else if	((isset($_POST['username']) && $_POST['username'] == $HRname && $_POST['passwd'] == $HRpassword) || 
			(isset($_POST['username']) && $_POST['username'] == $Adminname && $_POST['passwd'] == $Adminpassword))
{
    header("location: HR_Admin_Activity_Dashboard.php/");
	exit;
}	
	else{
		/*
	if( $username = "HR" && $passwd = "HR123")
		{
			$_SESSION["username"] = $username;  
			
		}
	else if( $username = "Client" && $passwd = "Client123")
		{
			$_SESSION["username"] = $username;    
		}
	else
	{  */
			echo "<h1>", "Incorrect Password or Username!" ,"</h1><br>";
			echo "You do not have access to this page! <br>";
			
			
		$txt="history.go(-1);";	
			echo "<br><button onclick='$txt' > Back</button>";
			
			
			exit;
} 
		?>
