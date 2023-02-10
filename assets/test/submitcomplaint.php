<html>
<head>
     <style>   
body 
{
  
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color:#fff;
 }
body
{
  background-image: url('images/logcomplaint.jpg');
   background-repeat: no-repeat;
  
}
div.c {
  text-align: right;
  color: #ffF;
    font-size: 35px;
    font-family: Arial;
    padding-right: 300px;
    float: right;
    padding-top: 5px;
    margin-top: 45px
}
.row{
	position: relative;
	
}
</style>

<script type="text/javascript">

  $(document).ready(function() {

      window.history.pushState(null, "", window.location.href);        

      window.onpopstate = function() {

          window.history.pushState(null, "", window.location.href);

      };

  });

</script>
<script type="text/javascript" src="contact us_files/naveen_script.js"></script>
<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var x = new Date()
var x1 = new Date().toLocaleString( {timeZone: 'Asia/Kolkata'});
// changing the display to UTC string
document.getElementById('ct').innerHTML = x1;
tt=display_c();

 }
</script>


</head><body oncontextmenu="return false;">
	<div class="row" style="background-color:#167d8c; height:80px;"> 

  
	<center><font size="6" color="#fff" style="font-family:Footlight MT Light;margin-top:0px"><b>ELECTRONICS CORPORATION OF INDIA LIMITED<br>CORPORATE PURCHASE</font></center></b> 
	
   <center><font size="6" color="#fff" style="font-family:Footlight MT Light;"><b></font></center></b>
   <br>
	</br></div>
<div class="row" style="background-color:#48aab6 ; height:40px;  padding-top:8px;width:100%"> 
 <center><font size="5" color="#fff" style="font-family:Footlight MT Light;">COMPUTERS AND PRINTERS ANNUAL MAINTENANCE </font></center>
 </br><br></div>
		
  <div class="row" align="right"style="background-color:#a9adb0; height:30px; padding-right:120px; ">
     <b><font color=#FFF size=5<div class="c">
					           <body onload=display_ct();>
                                 <span id='ct' ></span></body>
								 </font></li></div></b>
	<marquee behavior="scroll" direction="right" onmouseover="this.stop();" onmouseout="this.start();" >
    <img src="images/5.gif" width="550" height="150" alt="Natural" />
  </marquee>

<br></br><br></br><br></br>

<?php   
    session_start();  
	
	 require_once 'mailer/mailer/class.phpmailer.php'; 
	 $mail = new PHPMailer(true);
	 
	$email  = strip_tags($_POST['mailid']);
   $subject    = "Complaint Logged";
   $text_message = "Hello";      
   $message  ="";
   
  
    $con=mysqli_connect('localhost','root','Naveen@798@@') or die(mysql_error());  
	mysqli_select_db($con,'amc') or die("cannot select DB"); 
   
    $sql3 = "SELECT * FROM `adminmail`";
     $result3=mysqli_query($con,$sql3);
     $numrows3=mysqli_num_rows($result3); 
	
		 if($numrows3==0)
		 {
	//	 echo "No data exist in the workpack_contact table";	 
		 }
		 else
		 { 
			while($row3=mysqli_fetch_assoc($result3)) 
				{
				$sendermailid= $row3['Mail_ID'];	
                $senderpassword= $row3['Password'];		
				}
		 }
   
   
     mysqli_close($con);
	
    $con=mysqli_connect('localhost','root','Naveen@798@@') or die(mysql_error());  
	mysqli_select_db($con,'pcamc') or die("cannot select DB");  
	
	
	
	
	
	
	
	/*$myfile = fopen("mailidandpassword.txt", "r") or die("Unable to open file!");
    $mailaddress=fgets($myfile);
	$id = strip_tags($mailaddress);
	$pass=fgets($myfile);
    fclose($myfile);
	//echo $mailaddress;
	//echo $pass;
	*/
	
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
	
	/**********************************************************/
	try
   {
						$mail->IsSMTP(); 
						$mail->isHTML(true);
						$mail->SMTPDebug  = 0;                     
						$mail->SMTPAuth   = true;                  
						$mail->SMTPSecure = "ssl";                 
						$mail->Host       = "mail.ecil.co.in";      
						$mail->Port        = '465';             
						$mail->AddAddress($email);
						$mail->Username   =$sendermailid;  
						$mail->Password   =$senderpassword;            
						$mail->SetFrom($sendermailid,'Computer (AMC)');
						$mail->AddReplyTo($sendermailid,"Computer (AMC)");
						
					
						
						$mail->Subject    = $subject;
						$message = "Compliant Logged  Ref num :".$sernumber."<BR>Your complaint will be attended Soon... <BR> This is Autogenerated_mail from Computer AMC  <br><br>
								<br></br><br></br><br></br> <b><font color=#d209d9>Thanks & Regards,<br></br>Desktop Support Engineer <br>Annual Maintenance Contract (AMC) <br>Corporate Purchase.<br>Ph: 040-27182734/6830/040-27121320.</b></font>";
							$mail->Body  = $message;
								$mail->AltBody = $message;
								 
								if($mail->Send())
								{
							   // $msg = "Hi, Your mail successfully sent to".$email." ";
								}
								 $mail->ClearAllRecipients();
					   }
					   catch(phpmailerException $ex)
					   {
						$msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
						echo 'Mailer Error: ' . $mail->ErrorInfo;
					   }

						/******************************************************/
	
        }
		else
		{  
        echo "Error in Logging Complaint";  
        } 
		echo '<br><a href= "\\index.php">Back to Home Page</a><br>';
	
echo "</center></h2>";
	
	mysqli_close($con);
?>

</body>
</html>