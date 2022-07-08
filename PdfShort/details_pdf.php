<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contract Extraction Form One Page Summary</title>
</head>
<body>
	<p></p>
	<p></p>
	<p></p>
    <p style="text-align:"><u> CONTRACT CONSULTANT AMENDMENT AGREEMENT  </u></p>
    
   
            <small>This Agreement is made on <?=$user['DateOfContract']?></small><br></br><br></br>
            
            <small>Between:  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?=$user['CompanyName']?> whose office is at <?=$user['CompanyAddress']?></small><br></br><br></br>
           
			<small>And &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?=$user['title1']?> <?=$user['ConsulName']?> whose permanently located at</small><br></br> 
			<small>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Address <?=$user['ConsulAddress']?></small><br></br> 
			<small>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ID No <?=$user['ConsulID']?></small><br></br></small>     
            <small>_________________________________________________________________________________________________________</small><br></br>
			<small>Company and the consultant agreed:</small><br></br><br></br>
			<small><b>A. Main Details</b></p></small><br></br>
			<small><ul>
			<li><b>Position: &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?=$user['SecondSPosition']?></b></li><br></br>
			<li><b>Contract Consultant's Name: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?=$user['title1']?> <?=$user['ConsulName']?></b></li><br></br>
			<li><b>Contract Duration: &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?=$user['DateOfContract']?> to <?=$user['FinishDateOfContract']?></b></li><br></br>

			<li><b>Customer's Name: &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?=$user['ClientName']?></b></li><br></br>

			<li><b>Rate of payment : &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; THB <?=$user['RateOfPayment']?> per month</b></li><br></br>
			
			<li><b>XXXXXXX:  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b>XXXXXXXXXXXXXXXXXXXXXX</li><br></br>
			<li><b>Leave eligibility : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?=$user['LeaveEligi']?> days’ per annum</b></li><br></br>
			
			<li><b>Vacation Leave eligibility: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;</b>&nbsp; &nbsp; &nbsp; &nbsp; <?=$user['DateOfPayment']?> days per annum</li><br></br>
				
			
			<li><b>Contract Termination Period: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</b><?=$user['NoticePOT']?> month notice</li>
		
			</ul></small>
			<p></p>
			
			<small>The propose of this agreement is to extend contract agreement as above stated period, all the
					terms and conditions in initial signed contract are remained.</small><br></br><br></br>
			
			<p></p>
			<p></p>
			<p></p>
			<small>Signed: &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;______________________________________________________________</small><br></br>
			
			<dl><dd><dd>
			<small>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<?=$user['ConsulName']?></small>
			</dd></dl></dd>
			
			<dl><dd><dd>
			<small>Position  &nbsp; : &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<?=$user['SecondSPosition']?></small>
			</dd></dl></dd>
			
			<dl><dd><dd>
			<small>Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<?=$user['DateOfContract']?></small>
			</dd></dl></dd>
			
			<p></p>
			<p></p>
			<small>___________________________________________________________________________________________________<br></br>
			<center><b><?=$user['CompanyName']?></b><br></br>
			<small><?=$user['CompanyAddress']?></small><br></br>
			<b>Tel:XXXXXXXXXX Email: XXXXXXXXXX</b></center></small><br></br>
			

			
 

</body>
</html>

