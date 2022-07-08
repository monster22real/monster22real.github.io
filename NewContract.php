<?php
// connect to the database
$mysqli = mysqli_connect('localhost', 'root', '', 'contract');
if ($mysqli->connect_errno){
	echo $mysqli->connect_errno.": ".$mysqli->connect_error;
}


if (isset($_POST['FinishDateOfContract'])){
	$FinishDateOfContract=$_POST['FinishDateOfContract'];}
	
if (isset($_POST['RateOfPayment'])){
	$RateOfPayment=$_POST['RateOfPayment'];}
 
if (isset($_POST['NoticePOT'])){
	$NoticePOT=$_POST['NoticePOT'];}
	
if (isset($_POST['LeaveEligi'])){
	$LeaveEligi=$_POST['LeaveEligi'];}

if (isset($_POST['ContractID'])){
	$ContractID=$_POST['ContractID'];}

if (isset($_POST['LateWork'])){
	$LateWork=$_POST['LateWork'];}

if (isset($_POST['FirstSName'])){
	$FirstSName=$_POST['FirstSName'];}

if (isset($_POST['FirstSPosition'])){	
	$FirstSPosition=$_POST['FirstSPosition'];}
	
if (isset($_POST['SecondSName'])){
	$SecondSName=$_POST['SecondSName'];}
	
if (isset($_POST['SecondSPosition'])){
	$SecondSPosition=$_POST['SecondSPosition'];}
	
	$query1 = "UPDATE Contract SET ContractStat='Active', DateOfContract = CURRENT_DATE, StartDateOfContract = CURRENT_DATE, FinishDateOfContract = '$FinishDateOfContract', FirstSName = '$FirstSName', FirstSPosition = '$FirstSPosition', DateOfFirst = CURRENT_DATE, SecondSName = '$SecondSName', SecondSPosition = '$SecondSPosition', DateOfSecond = CURRENT_DATE where ContractID = $ContractID;";

if (mysqli_query($mysqli,$query1)){
	}

	
	$query2 = "UPDATE DUPCONTRACT SET ContractStat = 'Expire' WHERE ContractID = $ContractID";
	
if (mysqli_query($mysqli,$query2)){
	}
	
	$qu1 = "SELECT CompanyName FROM CONTRACT WHERE ContractID=$ContractID";
if ($result=$mysqli->query($qu1)){
	$row1=$result->fetch_array();
	$CompanyName = $row1['CompanyName'];
	}
	$qu2 = "SELECT DateOfPayment FROM CONTRACT WHERE ContractID=$ContractID";
if ($result=$mysqli->query($qu2)){
	$row2=$result->fetch_array();
	$DateOfPayment = $row2['DateOfPayment'];
	}

	$qu3 = "SELECT LateWork FROM CONTRACT WHERE ContractID=$ContractID";
if ($result=$mysqli->query($qu3)){
	$row3=$result->fetch_array();
	$LateWork = $row3['LateWork'];
	}	
	
	$qu4 = "SELECT ConsulID FROM Contract Where ContractID= $ContractID";
if ($result=$mysqli->query($qu4)){
	$row4=$result->fetch_array();
	$ConsulID = $row4['ConsulID'];
	}
	
	$qu5 = "SELECT ClientName FROM Contract Where ContractID= $ContractID";
if ($result=$mysqli->query($qu5)){
	$row5=$result->fetch_array();
	$ClientName = $row5['ClientName'];
	}
	$ContractStat="Active";
	$query3 = "INSERT INTO DUPCONTRACT (ContractID, ContractStat, DateOfContract, DateOfPayment, StartDateOfContract, FinishDateOfContract, LateWork, CompanyName, FirstSName, FirstSPosition, DateOfFirst, SecondSName, SecondSPosition, DateOfSecond, ConsulID, ClientName)
				VALUES('".$ContractID."','".$ContractStat."', CURRENT_DATE, '".$DateOfPayment."', CURRENT_DATE, '".$FinishDateOfContract."', '".$LateWork."', '".$CompanyName."', '".$FirstSName."', '".$FirstSPosition."', CURRENT_DATE, '".$SecondSName."', '".$SecondSPosition."', CURRENT_DATE, '".$ConsulID."', '".$ClientName."')";
	
if (mysqli_query($mysqli,$query3)){
	}
	
	
	$q4 = "UPDATE Consultant SET RateOfPayment='$RateOfPayment', NoticePOT='$NoticePOT', LeaveEligi= '$LeaveEligi' where consulID = $ConsulID ";
	
if (mysqli_query($mysqli,$q4)){
	}
	
	
$q5 = "UPDATE pdfgenerator SET DateOfContract=CURRENT_DATE, FinishDateOfContract='$FinishDateOfContract', RateOfPayment='$RateOfPayment', NoticePOT='$NoticePOT', LeaveEligi= '$LeaveEligi', FirstSName='$FirstSName', FirstSPosition='$FirstSPosition', SecondSPosition='$SecondSPosition' where ContractID = $ContractID ";

if (mysqli_query($mysqli,$q5)){
echo "Records were updated successfully.";
}
?>




