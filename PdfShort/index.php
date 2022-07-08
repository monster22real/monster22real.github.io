<?php
include('config.php');
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

  <title>Dynamic pdf generate</title>
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
            <th scope="col">CompanyName</th>
			<th scope="col">CompanyAddress</th>
			<th scope="col">ConsulName</th>
			<th scope="col">title1</th>
			<th scope="col">ConsulEmail</th>
			<th scope="col">ConsulAddress</th>
			<th scope="col">ConsulID</th>
			<th scope="col">DateOfContract</th>
			<th scope="col">FinishDateOfContract</th>
			<th scope="col">ClientName</th>
			<th scope="col">Location</th>
			<th scope="col">RateOfPayment</th>
			<th scope="col">NoticePOT</th>
			<th scope="col">LeaveEligi</th>
            <th scope="col">DateOfPayment</th>
			<th scope="col">ContractID</th>
			<th scope="col">LateWork</th>
			<th scope="col">FirstSName</th>
			<th scope="col">FirstSPosition</th>
			<th scope="col">SecondSPosition</th>
			
          </tr>
        </thead>
        <tbody>
          <?php $query = mysqli_query($con,"SELECT * FROM pdfgenerator "); 
          $i=1;
          while($row = mysqli_fetch_assoc($query))
          {
          ?>
          <tr>
            <th scope="row"><?=$i++?>.</th>
            <td><?=$row['CompanyName']?></td>
            <td><?=$row['CompanyAddress']?></td>
      
            <td><?=$row['ConsulName']?></td>
            <td><?=$row['title1']?></td>
			<td><?=$row['ConsulEmail']?></td>
			<td><?=$row['ConsulAddress']?></td>
			<td><?=$row['ConsulID']?></td>
			<td><?=$row['DateOfContract']?></td>
			
			<td><?=$row['FinishDateOfContract']?></td>
			<td><?=$row['ClientName']?></td>
			<td><?=$row['Location']?></td>
			<td><?=$row['RateOfPayment']?></td>
			
			<td><?=$row['NoticePOT']?></td>
			<td><?=$row['LeaveEligi']?></td>
			<td><?=$row['DateOfPayment']?></td>
			<td><?=$row['ContractID']?></td>
			
			<td><?=$row['LateWork']?></td>
			<td><?=$row['FirstSName']?></td>
			<td><?=$row['FirstSPosition']?></td>
			<td><?=$row['SecondSPosition']?></td>
			
            <td>
              <a target="_blank" href="print-details.php?id=<?=$row['id']?>" class="btn btn-sm btn-primary"> <i class="fa fa-file-pdf-o"></i> Print  Details</a>
            </td>
          </tr>
         <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  </div>












  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>