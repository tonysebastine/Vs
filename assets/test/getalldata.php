
 
  <!doctype html>  
    <html>  
    <head>  
    <title>Get all Data</title>  
        
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

<script type="text/javascript" src="contact us_files/naveen_script.js"></script>
	 
	<script type="text/javascript">
	function CheckData()
	{		
	//alert("Enter Complaint Number");
			var complaint = document.mydata.complaint.value;
			var cnt=0;
			if(complaint=="")
				{
					alert("Enter Complaint Number");
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

  
	<center><font size="6" color="#fff" style="font-family:Footlight MT Light;margin-top:0px"><b>ELECTRONICS CORPORATION OF INDIA LIMITED<br>CORPORATE PURCHASE</font></center></b> 
	
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
<br></br>
   <br>
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
 
     <form name='mydata' action="viewcomplaintstatus.php" method="POST">  
	<center>
 
 <table border =8>
   
<?php	
if($_SESSION["userType"]=="Admin")
{

	 $con=mysqli_connect('localhost','root','Naveen@798@@') or die(mysql_error());  
     mysqli_select_db($con,'pcamc') or die("cannot select DB");
		 	
	$sql1 = "SELECT * FROM complaint";
    $result1=mysqli_query($con,$sql1);
    $numrows1=mysqli_num_rows($result1); 
	echo "<tr><td bgcolor=#fff>serialNumber</td>	<td bgcolor=#fff>UserName</td>	<td bgcolor=#fff>Problem_Desc</td>	<td bgcolor=#fff>Location</td>	<td bgcolor=#fff>Contact_number</td> <td bgcolor=#fff>Mail Id</td>	<td bgcolor=#fff>Comp_Date</td>	<td bgcolor=#fff>Comp_Time</td><td bgcolor=#fff>Comp_Status</td>	<td bgcolor=#fff>Problem_Observed</td><td bgcolor=#fff>Rectified_by_procress</td><td bgcolor=#fff>Rectified_by_person</td><td bgcolor=#fff>RectifiedDate</td><td bgcolor=#fff>RectfiedTime</td><td bgcolor=#fff>Remarks</td><td bgcolor=#fff>admin_status</td></tr>";
	if ($numrows1 !=0)
					{
						echo "<tr>";
							while($row=mysqli_fetch_assoc($result1))  
							{
								
								echo "<tr><td bgcolor=#fff >".$row['serialNumber']."</td>
								<td bgcolor=#fff>".$row['UserName']."</td>
								<td bgcolor=#fff><TExTAREA ROWs ='2' COLS='20' NAME='prob_desc'>".$row['Problem_Desc']."</textarea></td>	
								<td bgcolor=#fff>".$row['Location']."</td>
								<td bgcolor=#fff>".$row['Contact_number']."</td>
								<td bgcolor=#fff>".$row['mailId']."</td>
								<td bgcolor=#fff>".$row['Comp_Date']."</td>
								<td bgcolor=#fff>".$row['Comp_Time']."</td>
								<td bgcolor=#fff>".$row['Comp_Status']."	</td>";											
								echo "<td bgcolor=#fff><TExTAREA ROWs ='2' COLS='20' NAME='Problem_Observed'>".$row['Problem_Observed']."</textarea></td>";
								echo "<td bgcolor=#fff><TExTAREA ROWs ='2' COLS='20' NAME='Rectified_by_process'>".$row['Rectified_by_process']."</textarea></td>";
								echo "<td bgcolor=#fff>".$row['Rectified_by_person']."</td>";
								echo "
								<td bgcolor=#fff>".$row['RectifiedDate']."</td>
								<td bgcolor=#fff>".$row['RectfiedTime']."</td>
								<td bgcolor=#fff>".$row['Remarks']."	</td>
								<td bgcolor=#fff>".$row['Admin_Verify_sts']."</td>";
								//echo "<TD><a href='closecomp.php?refno=".$row['serialNumber']."'>CLOSE</a></td></TR>";							
								
							}
							echo "</tr>";
						
					}	
					
	//echo "<tr><TD colspan =16 bgcolor=#fff ><center><a href='getbackuppc.php'>GET BACKUP</a></center></td></TR>";
	//echo "<tr><TD colspan =16 bgcolor=#fff ><center><a href=getalldata.php'>GET TOTAL DATA</a></center></td></TR>";
	echo "<tr><TD colspan =16 bgcolor=#fff><center><a href='logout.php'>LOG OUT</a></center></td></TR>";	
}
else
{
echo "<tr><td bgcolor=#fff>COMPLAINT NUMBER</td><td><input type=text name='complaint' ></td></tr>	";
echo "<tr><td colspan =2 bgcolor=#fff><center><input type=button Onclick ='CheckData()' value='Submit'></center></td></tr>	";
//echo "<tr><TD colspan =16 bgcolor=#fff ><center><a href='logout.php'>LOG OUT</a></center></td></TR>";	
}
			

?>

 
</table>
	</center>
    </form>  
	 <br> 
	 <center>
  
	<a href='logout.php'>LOG OUT</a>
	</center>
	<div class="footer">
<div class="row" style="background-color: #006fa7; height:50px;padding-left:35px; padding-top:5px"> 
<font size="3" color="white" style="font-family:Sitka Small;">Designed and Developed by OMSYSTEM Team. <br>Suggestions any Further Details Contact Administrator:amcpc@ecil.co.in </b></font>
    </div></div>
    </body>  
	</html>