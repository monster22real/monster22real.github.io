<?php
// connect to the database
$mysqli = mysqli_connect('localhost', 'root', '', 'contract');
if ($mysqli->connect_errno){
echo $mysqli->connect_errno.": ".$mysqli->connect_error;
}
/*?>
<?php

<!DOCTYPE html>
<html>

<head>
<title>Contract Extraction</title>
</head>

<body>
<?php*/


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


if (isset($_POST['CompanyName'])){
$CompanyName=$_POST['CompanyName'];}

if (isset($_POST['CompanyAddress'])){
$CompanyAddress=$_POST['CompanyAddress'];}

if (isset($_POST['ConsulName'])){
$ConsulName=$_POST['ConsulName'];}

if (isset($_POST['title'])){
$title1=$_POST['title'];}

if (isset($_POST['ConsulAddress'])){
$ConsulAddress=$_POST['ConsulAddress'];}

if (isset($_POST['ConsulID'])){
$ConsulID=$_POST['ConsulID'];}

if (isset($_POST['Position'])){
$Position=$_POST['Position'];}

if (isset($_POST['ClientName'])){
$ClientName=$_POST['ClientName'];}

if (isset($_POST['Location'])){
$Location=$_POST['Location'];}

if (isset($_POST['DateOfPayment'])){
$DateOfPayment=$_POST['DateOfPayment'];}

if (isset($_POST['ConsulEmail'])){
$ConsulEmail=$_POST['ConsulEmail'];}




$query1 = "INSERT INTO CONSULTANT VALUES('$ConsulID', 'Active', '$title1', '$ConsulName', '$ConsulEmail', '$RateOfPayment', '$NoticePOT', '$LeaveEligi', '$ConsulAddress', '$CompanyName', '$CompanyAddress', '$SecondSPosition')";

if (mysqli_query($mysqli,$query1)){
}

$query2 = "INSERT INTO CLIENT VALUES('$ClientName', '$Location', '$ConsulID')";

if (mysqli_query($mysqli,$query2)){
}
$query3 = "INSERT INTO CONTRACT VALUES('$ContractID','Active', CURRENT_DATE, '$DateOfPayment', CURRENT_DATE, '$FinishDateOfContract', '$LateWork', '$CompanyName', '$FirstSName', '$FirstSPosition', CURRENT_DATE, '$SecondSName', '$SecondSPosition', CURRENT_DATE, '$ClientName', '$ConsulID','','')";

if (mysqli_query($mysqli,$query3)){
}

$ContractStat = 'Active';
$query4 = "INSERT INTO DUPCONTRACT (ContractID,ContractStat, DateOfContract, DateOfPayment, StartDateOfContract, FinishDateOfContract, LateWork, CompanyName, FirstSName, FirstSPosition, DateOfFirst, SecondSName, SecondSPosition, DateOfSecond, ConsulID, ClientName)
VALUES('".$ContractID."','".$ContractStat."', CURRENT_DATE, '".$DateOfPayment."', CURRENT_DATE, '".$FinishDateOfContract."', '".$LateWork."', '".$CompanyName."', '".$FirstSName."', '".$FirstSPosition."', CURRENT_DATE, '".$SecondSName."', '".$SecondSPosition."', CURRENT_DATE, '".$ConsulID."', '".$ClientName."')";
if (mysqli_query($mysqli,$query4)){
}

$query5 = "INSERT INTO pdfgenerator (CompanyName,CompanyAddress, ConsulName, title1, ConsulEmail, ConsulAddress, ConsulID, DateOfContract, FinishDateOfContract, ClientName, Location, RateOfPayment, NoticePOT, LeaveEligi,DateOfPayment, ContractID,LateWork,FirstSName,FirstSPosition,SecondSPosition)
VALUES('".$CompanyName."','".$CompanyAddress."', '".$ConsulName."', '".$title1."', '".$ConsulEmail."', '".$ConsulAddress."', '".$ConsulID."', CURRENT_DATE, '".$FinishDateOfContract."', '".$ClientName."', '".$Location."', '".$RateOfPayment."', '".$NoticePOT."', '".$LeaveEligi."', '".$DateOfPayment."', '".$ContractID."', '".$LateWork."', '".$FirstSName."', '".$FirstSPosition."', '".$SecondSPosition."' )";
if (mysqli_query($mysqli,$query5)){
echo "Record Update Successfully.";
}

?>