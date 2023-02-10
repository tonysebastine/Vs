<html>
<head>
</head>
<body>
<style>   
body 
{
  background-image: url('images2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: #ddffdd;
 }
body
{
  background-image: url('images2.jpg');
}		



	</style>  
 <br>
	<center><font size="6" color="white"><b>ELECTRONICS CORPORATION OF INDIA LIMITED</font></center></b> 
	
   <center><font size="6" color="white"><b>CORPORATE PURCHASE</font></center></b>
   <br>
	</br>
   
   
   <center><font size="6" color="#330099"><b>OMSYSTEMS AND SERVICES PVT.LTD</font></center></b>
  </br>
  
 
  <br>
 <center><font size="6" color="white">COMPUTERS AND PRINTERS MAINTAINANCE </font></center>
 </br><br>
		  <marquee behavior="scroll" direction="right">
    <img src="pcs.png" width="600" height="80" alt="Natural" />
  </marquee>
   <br>



<?php   
    session_start();  
  
    $con=mysqli_connect('localhost','wwwprint_root','Tony@124816') or die(mysql_error());  
	mysqli_select_db($con,'wwwprint_pcamc') or die("cannot select DB");  
	
	
	
	
	
	$sql1 = "SELECT * FROM complaint";

 $result1=mysqli_query($con,$sql1);
 $numrows1=mysqli_num_rows($result1); 
	$totrows=$numrows1;
	$sernumber=$totrows+1;
	
	//echo $totrows."<br>";
	//echo $_POST['userName']."<br>";
	//echo $_POST['prob_desc']."<br>";
	//echo $_POST['Location']."<br>";
	//echo $_POST['ContactNum']."<br>";
	
	
	$timestamp = time();
	//echo $date;
	date_default_timezone_set("Asia/Calcutta");
    //echo date_default_timezone_get();
	$CompTime=date("H:i:s", $timestamp)	;
	//echo $CompTime;
	$Compdate=date("Y-m-d", $timestamp)	;
	//echo $Compdate;
	
	echo"<br>";
	 $qry="INSERT INTO `complaint` 
	 (`serialNumber`, `UserName`, `Problem_Desc`, `Location`, `Contact_number`, `Comp_Date`, `Comp_Time`,`Comp_Status`, `Admin_Verify_sts`,`mailId`) 
	 VALUES 
	 ('".$sernumber."', 
	 '".$_POST['userName']."',
	 '".$_POST['prob_desc']."', 
	 '".$_POST['Location']."', 
	 '".$_POST['ContactNum']."',
	 '".$Compdate."', 
	 '".$CompTime."',
	  'OPEN',
	  'OPEN',
	  '".$_POST['mailid']."'
	  )"; 
	 echo "<h2><center>";
	 
	$result=mysqli_query($con,$qry);  
			echo mysqli_error($con);
        if($result)
		{  
	echo "USER NAME: ";   	echo $_POST['userName']."<br>";
	echo "PROBLEM DESC: ";  echo $_POST['prob_desc']."<br>";
	echo "LOCATION: ";  echo $_POST['Location']."<br>";
	echo "CONTACT NUMBER: "; echo $_POST['ContactNum']."<br>";
	echo "Mail Id: "; echo $_POST['mailid']."<br>";
    echo "Complaint Logged  Successfully";  
    echo "<br>";
	echo "Complaint Number: ".$sernumber;  
	
        }
		else
		{  
        echo "Error in Logging Complaint";  
        } 
		echo '<br><a href= "PClogin.php">Back to Home Page</a><br>';
	
echo "</center></h2>";
	
	mysqli_close($con);
?>

</body>
</html>