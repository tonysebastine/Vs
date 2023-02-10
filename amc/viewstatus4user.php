 <!doctype html>  
<html>  
<head>  
	
    <title>View Complaint Status</title> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
       <style> <link rel="amc/stylesheet" href="amc/style.css"> 
body 
{
 
  background-color:#35e8be;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
 
 }



div.c {
  text-align: right;
  color: #ffF;
    font-size: 35px;
    font-family: Arial;
    padding-right: 230px;
    float: right;
    padding-top: 35px;
    margin-top: 45px
}
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: ;
   color: white;
   text-align: left;
  
}


.p{
align:right;
}

#autoresizing {
            display: block;
            overflow: ;
            resize: none;
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
	 <style media="screen">
    	*,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: ;
}
.popup{
    background-color: #ffffff;
    width: 420px;
	height:200px;
    padding: 10px 40px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 60%;
    border-radius: 8px;
    font-family: "Poppins",sans-serif;
    display: none; 
    text-align: center;
}
.popup button{
    display: block;
    margin:  0 0 20px auto;
    background-color: transparent;
    font-size: 30px;
    color: #ffffff;
		background: #03549a;
		border-radius: 100%;
		width: 40px;
		height: 40px;
    border: none;
    outline: none;
    cursor: pointer;
}
.popup h2{
	margin-top: -20px;
}
.popup p{
    font-size: 20px;
    text-align: center;
    margin: 20px 0;
    line-height: 30px;
}

    </style>
    <!--<script type="text/javascript" src="contact us_files/naveen_script.js"></script>-->
	<script type="text/javascript">
	function CheckData()
	{		
			var complaint = document.mydata.complaint.value;
			if(username=="")
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
	
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {

x = new Date().toLocaleString( {timeZone: 'Asia/Kolkata'});
document.getElementById('ct').innerHTML = x;
display_c();
 }

        textarea = document.querySelector("#autoresizing");
        textarea.addEventListener('input', autoResize, false);
      
        function autoResize() {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        }
    </script>



	
    </head>  
    <!--<body oncontextmenu="return false" style="background-color: #e6d5a8";> --> 
    <body oncontextmenu="return false" onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload=""
 style="background-image:url('images/back_all2.gif')";>  
	<div class="popup">
        <button id="close">&times;</button>
       <div class="noselect"> <h2>PrintStudio</h2><br>
        <p>Welcome to Our Website<br>We hope you have a wonderful day!
        </p></div>
        
    </div>
    <!--Script-->
    <script type="text/javascript">
window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        1000 
    )
});


document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
    </script>
	<script type="text/javascript">
inactivityTimeout = true
resetTimeout()
function onUserInactivity() {
   window.location.href = "form.php"
}
/*
function resetTimeout() {
   clearTimeout(inactivityTimeout)
   inactivityTimeout = setTimeout(onUserInactivity, 1000 * 30)
}
window.onmousemove = resetTimeout

    window.history.forward();
    function noBack()
    {
        window.history.forward();
    }
    */
</script>




	<div class="header" style="background-image: url('images/back_all.gif'); width:100%; height:180; padding-left:0px;">

   <div class="noselect">
	<center><font size="6" color="#fff" style="font-family:Footlight MT Light;margin-top:0px"><b>ELECTRONICS CORPORATION OF INDIA LIMITED<br>CORPORATE PURCHASE</font></center></b> 
	
   <center><font size="6" color="#fff" style="font-family:Footlight MT Light;"><b></font></center></b>
   <br>
	</br>
	
		
<!--<div class="row" style="background-color:#3a6d94; height:50px; width:100%;"> -->
 <center><font size="6" color="#fff" style="font-family:Footlight MT Light;">COMPUTERS AND PRINTERS ANNUAL MAINTENANCE </font></center>
 </br><br></div>
  <div class="row" align="right"style="background-image url('images/back_2all.gif');  width:100%;height:30px; padding-right: 230px;  ">
     <b><font color=#4752cc size=5<div class="c">
					           <body onload=display_ct();>
                                 <span id='ct' ></span></body>
								 </font></li></div></b></div>
	<!--<marquee behavior="scroll" direction="right" onmouseover="this.stop();" onmouseout="this.start();" >
    <img src="pcs.png" width="600" height="80" alt="Natural" /><img src="images/logcomplaint1.jpg" width="100%" height="180">
  </marquee>-->

     <form name=mydata action="viewcomplaintstatus.php" method="POST">  
	<center>   <div class="noselect">
  <table border =3>
 
<?php	

	 $con=mysqli_connect('localhost','wwwprint_root','Tony@124816') or die(mysql_error());  
     mysqli_select_db($con,'wwwprint_pcamc') or die("cannot select DB");
		 	
	$sql1 = "SELECT * FROM complaint where Admin_Verify_sts='OPEN'";
    $result1=mysqli_query($con,$sql1);
    $numrows1=mysqli_num_rows($result1); 
	echo "<tr><td>serialNumber</td>	<td>UserName</td>	<td>Problem_Desc</td>	<td>Location</td>	<td>Contact_number</td><td>Mail Id</td>		<td>Comp_Date</td>	<td>Comp_Time</td><td>Comp_Status</td>	<td>Problem_Observed</td><td>Rectified_by_procress</td><td>Rectified_by_person</td><td>RectifiedDate</td><td>RectfiedTime</td><td>Remarks</td</tr>";
	if ($numrows1 !=0)
					{
						echo "<tr>";
							while($row=mysqli_fetch_assoc($result1))  
							{
								
								echo "<tr><td>".$row['serialNumber']."</td>
								<td>".$row['UserName']."</td>
								<td><TExTAREA id=autoresizing ROWs ='2' COLS='20' NAME='prob_desc'readonly>".$row['Problem_Desc']."</textarea></td>	
								<td>".$row['Location']."</td>
								<td>".$row['Contact_number']."</td>
								<td>".$row['mailId']."</td>
								<td>".$row['Comp_Date']."</td>
								<td>".$row['Comp_Time']."</td>
								<td>".$row['Comp_Status']."	</td>";											
								echo "<td><TExTAREA id=autoresizing ROWs ='2' COLS='20' NAME='Problem_Observed'readonly>".$row['Problem_Observed']."</textarea></td>";
								echo "<td><TExTAREA ROWs ='2' COLS='20' NAME='Rectified_by_process'readonly>".$row['Rectified_by_process']."</textarea></td>";
								echo "<td>".$row['Rectified_by_person']."</td>";
								echo "
								<td>".$row['RectifiedDate']."</td>
								<td>".$row['RectfiedTime']."</td>
								<td>".$row['Remarks']."	</td>";
							//	echo "<TD><a href='closecomp.php?refno=".$row['serialNumber']."'>CLOSE</a></td></TR>";							
								
							}
							echo "</tr>";
						
					}	
					

		
	//echo "<tr><TD colspan =16 ><center><a href='\\form.php'>Back to Home Page</a></center></td></TR><br>";
	echo "<tr><TD colspan =16 ><center><a href='\\amc/form.php'>LOG OUT</a></center></td></TR><br><br><br></br>";

			

?>

 
</table></div>
	</center>
    </form>  
	 <br><center><div class="noselect">
    <a href="complaintLog.php"><font color="blue" size=4>Complaint Login page</font></a> 
</center></div>
 <br><br>
	<div class="footer">
<div class="row" style="background-image:url('images/footer.gif'); height:50px;padding-left:35px; padding-top:10px"> 
<div class="noselect"><font size="3" color="white" style="font-family:Sitka Small;">Designed and Developed by PrintStudio <br>Suggestions any Further Details Contact Administrator:support@printstudio.in </b></font>
    </div></div> </body>  </div> 
	</html>