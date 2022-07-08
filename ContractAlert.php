<?php
include('Connect.php');
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Contract Expire</title>
</head>

<body>
  <div class="container">

  
  
  <h1 class="text-center">PDF Generate in Php</h1>

  <div class="card">
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ContractID</th>
			
			
			<th scope="col">DateOfContract</th>
			
			<th scope="col">FinishDateOfContract</th>
			
			<th scope="col">ClientName</th>
			
			<th scope="col">RateOfPayment</th>
			<th scope="col">ConsulID</th>
			<th scope="col">Consultant Name</th>
			<th scope="col">ConsulEmail</th>
			
			
          </tr>
        </thead>
        <tbody>
          <?php $query = mysqli_query($mysqli,"SELECT * FROM `pdfgenerator` WHERE FinishDateOfContract - INTERVAL (NoticePOT*30) day < CURRENT_DATE and FinishDateOfContract>CURRENT_DATE;"); 
          $i=1;
          while($row = mysqli_fetch_assoc($query))
          { 
			
          ?>
          <tr>
            <th scope="row"><?=$i++?>.</th>
		
			<td><?=$row['ContractID']?></td>
			
			<td><?=$row['DateOfContract']?></td>
			<td><?=$row['FinishDateOfContract']?></td>
			<td><?=$row['ClientName']?></td>
			<td><?=$row['RateOfPayment']?></td>
			<td><?=$row['ConsulID']?></td>
			
            <td><?=$row['ConsulName']?></td>
			<td><?=$row['ConsulEmail']?></td>
          </tr>
		  
		 <?php } ?>

        </tbody>
      </table>
    </div>
  </div>

  </div>