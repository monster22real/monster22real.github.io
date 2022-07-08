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
			<th scope="col">ContractStat</th>
			
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
          <?php $query = mysqli_query($mysqli,"SELECT * FROM Contract where ContractStat='Expire' "); 
          $i=1;
          while($row = mysqli_fetch_assoc($query))
          { 
			$ConsulID = $row['ConsulID'];
			$qu1 = "SELECT RateOfPayment FROM Consultant WHERE ConsulID=$ConsulID";
			if ($result=mysqli_connect('localhost', 'root', '', 'contract')->query($qu1)){
				$row1=$result->fetch_array();
				$RateOfPayment = $row1['RateOfPayment'];
				}
				$qu2 = "SELECT ConsulEmail FROM Consultant WHERE ConsulID=$ConsulID";
			if ($result=mysqli_connect('localhost', 'root', '', 'contract')->query($qu2)){
				$row2=$result->fetch_array();
				$ConsulEmail = $row2['ConsulEmail'];
				}

          ?>
          <tr>
            <th scope="row"><?=$i++?>.</th>
		
			<td><?=$row['ContractID']?></td>
			<td><?=$row['ContractStat']?></td>
			<td><?=$row['DateOfContract']?></td>
			<td><?=$row['FinishDateOfContract']?></td>
			<td><?=$row['ClientName']?></td>
			<td><?=$RateOfPayment?></td>
			<td><?=$ConsulID?></td>
			
            <td><?=$row['SecondSName']?></td>
			<td><?=$ConsulEmail?></td>
          </tr>
		  
		 <?php } ?>

        </tbody>
      </table>
    </div>
  </div>

  </div>