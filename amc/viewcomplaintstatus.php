<?php
session_start();  
    if(!isset($_SESSION["sess_user"]))
	{  
        //header("location:purchase.php"); 

		
    } 
	else 
	{
		print " User Type: ".$_SESSION["userType"]."<BR>";
		echo " User Name: ".$_SESSION["sess_user"];
	}
 
 ?>
 <table border =8>
 <?php	
if($_SESSION["userType"]=="User")
{
	$serno= $_POST['complaint'];
	 $con=mysqli_connect('localhost','wwwprint_root','Tony@124816') or die(mysql_error());  
     mysqli_select_db($con,'wwwprint_pcamc') or die("cannot select DB");
		 	
	$sql1 = "SELECT * FROM complaint where serialNumber='".$serno."'";
    $result1=mysqli_query($con,$sql1);
    $numrows1=mysqli_num_rows($result1); 
	
	if ($numrows1 !=0)
					{
					while($row=mysqli_fetch_assoc($result1))  
							{
							echo "<tr><td bgcolor=#fff>Complaint Number</td><td colspan=2 bgcolor=#fff><input type =text name=sernum value= ".$row['serialNumber']."></td></tr>";
							echo "<tr><td  bgcolor=#fff>User Name</td><td colspan=2 bgcolor=#fff>".$row['UserName']."</td></tr>";
							echo "<tr><td bgcolor=#fff>Problem Description</td><td colspan=2 bgcolor=#fff><TExTAREA ROWs ='2' COLS='60' NAME='prob_desc'readonly>".$row['Problem_Desc']."</textarea></td></tr>";
							echo "<tr><td bgcolor=#fff>Location</td><td colspan=2 bgcolor=#fff>".$row['Location']."</td></tr>";
							echo "<tr><td bgcolor=#fff>Contact Number</td><td colspan=2 bgcolor=#fff>".$row['Contact_number']."</td></tr>";
							echo "<tr><td bgcolor=#fff>Complaint_Date</td><td colspan=2 bgcolor=#fff>".$row['Comp_Date']."</td></tr>";
							echo "<tr><td bgcolor=#fff>Complaint_Time</td><td colspan=2 bgcolor=#fff>".$row['Comp_Time']."</td></tr>";	
							echo "<tr><td bgcolor=#fff>Mail id:</td><td colspan=2 bgcolor=#fff>";	
							echo "<input type =text name=mailid value= ".$row['mailId']."></td></tr>";
							
							
							echo "<tr><td bgcolor=#fff>Complaint Status</td><td colspan=2 bgcolor=#fff>";
							echo "<select name=cursts>";
							if ($row['Comp_Status'] =="OPEN")
							{
								ECHO "<option value=OPEN selected>OPEN</option>"; 
								ECHO "<option value=CLOSED >CLOSED</option>"; 
							}
							if ($row['Comp_Status'] =="CLOSED")
							{
							ECHO "<option value=CLOSED selected>CLOSED</option>"; 
							ECHO "<option value=OPEN >OPEN</option>"; 
							}			
							
							echo "</td></tr>";
							echo "<tr><td bgcolor=#fff>Problem_Observed</td><td colspan=2 bgcolor=#fff><TExTAREA ROWs ='2' COLS='60' NAME=Problem_Observed>".$row['Problem_Observed']."</textarea></td></tr>";
							echo "<tr><td bgcolor=#fff>Rectified_by_procress</td><td colspan=2 bgcolor=#fff><TExTAREA ROWs ='2' COLS='60' NAME=Rectified_by_process>".$row['Rectified_by_process']."</textarea></td></tr>";
							echo "<tr><td bgcolor=#fff>Rectified_by_person</td><td colspan=2 bgcolor=#fff><input type =text name=person value= ".$row['Rectified_by_person']."></td></tr>";
							echo "<tr><td bgcolor=#fff>RectifiedDate</td><td colspan=2 bgcolor=#fff><input type =date name=date value= ".$row['RectifiedDate']."></td></tr>";
							$tyme= $row['RectfiedTime'];
							//echo $tyme;
							$time1=strtotime($tyme);
							//echo $time1;
							//echo "<br>";
							$hrs= date('H', $time1);
							$mins= date('i', $time1);
											
						//	echo $hrs;
						//	echo "<br>";
						//	echo $mins;
							echo "<tr><td bgcolor=#fff>RectfiedTime(24 Hours format)</td><td bgcolor=#fff>Hours<input type =text name=Hours value=".$hrs.">Minutes<input type =text name=minutes value=".$mins."></td></tr>";
							echo "<tr><td bgcolor=#fff>Remarks</td><td colspan=2 bgcolor=#fff><TExTAREA ROWs ='2' COLS='60' NAME='remarks'>".$row['Remarks']."</textarea></td></tr>";
							echo "<tr><td colspan =3  bgcolor=#fff><center><input type=button Onclick ='CheckData()' value='Update'></center></td></tr>";
							}
					}							
						
}
else
{
	echo "Invalid User";
}
 
 ?>
<!doctype html>  
    <html>  
    <head>  
    <title>close Complaint</title> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 	
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
.noselect {
  -webkit-touch-callout: none; /* iOS Safari */
    -webkit-user-select: none; /* Safari */
     -khtml-user-select: none; /* Konqueror HTML */
       -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome and Opera */
}
</style> 
<script type="text/javascript" src="contact us_files/naveen_script.js"></script>
	<script type="text/javascript">
	function CheckData()
	{		
	//alert("Enter Complaint Number");
	//document.forms["mydata"].submit();
		var ob_prob = document.mydata.Problem_Observed.value;
			var rect_proc = document.mydata.Rectified_by_process.value;
			var rect_per = document.mydata.person.value;
			var date = document.mydata.date.value;
			var hours = document.mydata.Hours.value;
			var min = document.mydata.minutes.value;
		var cnt=0;
			if(ob_prob=="")
				{
					alert("Enter Problem Observed");
					cnt++;
				}
			if(rect_proc=="")
				{
					alert("Enter Rectified by process");
					cnt++;
				}
			if(rect_per=="")
				{
					alert("Enter Engineer Name");
					cnt++;
				}
	 if(date=="")
				{
					alert("Enter Rectified Date");
					cnt++;
				}
		if(hours=="")
				{
					alert("Enter hours in RectfiedTime  ");
					cnt++;
				}
		if(min=="")
				{
					alert("Enter minutes RectfiedTime ");
					cnt++;
				}
			
			if(cnt==0)
			{		 
			document.forms["mydata"].submit();
			}
			else
			{
			document.forms["mydata"].reset();
			}
				
	}
</script>
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
    </head>  
    <body oncontextmenu="return false;">
	<div class="row" style="background-color:#167d8c; height:80px;"> 

  <div class="noselect">
	<center><font size="6" color="#fff" style="font-family:Footlight MT Light;margin-top:0px"><b>PrintStudio India Pvt.Ltd</font></center></b> 
	
   <center><font size="6" color="#fff" style="font-family:Footlight MT Light;"><b></font></center></b>
   <br>
	</br></div>
<div class="row" style="background-color:#48aab6 ; height:40px;  padding-top:8px;width:100%"> 
 <center><font size="5" color="#fff" style="font-family:Footlight MT Light;">COMPUTERS AND PRINTERS ANNUAL MAINTENANCE </font></center>
 </br><br></div>
		
  <div class="row" align="right"style="background-color:#a9adb0; height:30px; padding-right:180px; ">
     <b><font color=#FFF size=5<div class="c">
					           <body onload=display_ct();>
                                 <span id='ct' ></span></body>
								 </font></li></div></b>
<br></br>   <br>
 <form name='mydata' action="updatecomp.php" method="POST">  
<center>
	

 </table>
	</center>
    </form>  
	 <br> 
	 <center>
    <a href="https://support.printstudio.in/index.php">Previous page</a><br> 
	<a href='logout.php'>LOG OUT</a>
	</center><br><br></br> <br><br><br><br>
	<div class="footer">
<div class="row" style="background-color: #006fa7; height:50px;padding-left:35px; padding-top:5px"> 
<font size="3" color="white" style="font-family:Sitka Small;">Designed and Developed by OMSYSTEM Team. <br>Suggestions any Further Details Contact Administrator:amcpc@ecil.co.in </b></font>
    </div></div></div>
    </body>  
	</html>
 