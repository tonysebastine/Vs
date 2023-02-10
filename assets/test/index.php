
<!DOCTYPE html>
<html lang="en">
<head>

    <title> Computer AMC Home Page </title>
<meta charset="UTF-8">

    <link rel="stylesheet" href="PCAMC/style.css">
	 <link href="PCAMC/amc.png" rel="icon">
  <link href="PCAMC/amc.png" rel="apple-touch-icon">
</head>
<style>
img {
  border: 0.5px solid #ddd;
  border-radius: 8px;
  padding: 5px;
width: 150px;
}
div.c {
  text-align: right;
  color: #ffF;
    font-size: 35px;
    font-family: Arial;
    padding-right: 360px;
    float: right;
    padding-top: 35px;
    margin-top: 45px
}

  </style>
 

  
  <script src="PCAMC/pclogin2.js"></script>
<!--<script type="text/javascript" src="PCAMC/contact us_files/naveen_script.js"></script>-->
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

<body oncontextmenu="return false;">



    <div id="content" style="height:100%;">

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h1 class="logo" img src="PCAMC/NY1.GIF"></h1>
				<img src="PCAMC/images/NY1.GIF" alt="ecil" style="width:150px">
            </div>

   <font color="#fff" font size=8 font-family="Bookman Old Style">Electronics Corporation Of India Limited</center>
</font>
           <div class="menu">
                <ul>
                    <li><a href="http://10.19.8.13/">HOME</a></li>
                    <li><a href="ftp://10.19.8.22">FTP_SERVER</a></li>
					  <li><a href="PCAMC/services.html">SERVICES</a></li>
                    <li><a href="PCAMC/ENGINEER.HTML">ENIGNEER_CONTACT</a></li>
                    <li><a href="http://10.19.8.13/PCAMC/contact%20us_files/contacttab.html">CONTACT</a></li>
					 <li><a href="PCAMC/search.php"><img src="PCAMC/images/SEARCH.jpg" alt="search" style="width:330PX" ></a></li>
					 </ul>
					     
						 
						 
            </div>
   </div> 
 		
				<div class="c"><font color=#FFF size=5>
					           <body onload=display_ct();>
                                 <span id='ct' ></span></body>
								 </font></li></div>
                          </ul>	
		
					
		<div class="content">
            <h1> <br><span>PRINTSTUDIO </span> <br></h1>
            <p class="par"><br>
          <b> <font size="6" color="#ff7200" style="font-family:Footlight MT Light;">COMPUTERS AND PRINTERS ANNUAL MAINTENANCE </font></b>

              <BR> <b><br>"Let us work up the embers of national pride latent in all of us and build up <br>our morale so that we can confidently aim high and achieve greater goals".<br>

<br>Dr. A.S.Rao,
<br>Founder Father of ECIL </b>
            </p>
<br></br><br></br><br></br>
                 <button class="cn"><a href="PCAMC/complaintLog.php">Log Complaint </a></button>
				<button class="cn"><a href="PCAMC/form.php">View Status</a></button>
				<button class="cn"><a href="PCAMC/complaint Details.php">Complaint_Status</a></button><br></br><br></br>
				<center> <font size="5" color = "white"><a href="PCAMC/1.html"> Frequent Problems and Solutions</a></font></center>
                 
				  <form action="" method="POST"> 
				   
				   
                <div class="form">
				
				
                    <h2>Engineer Login</h2>
					
                    <input type="text" name="user" placeholder="UserName Here">
                    <input type="password" name="pass" placeholder=" Password Here">
		
					<button class="btnn" input type="submit" name="submit">
                    Login</button>
<?php  
    if(isset($_POST["submit"])){  
      
    if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
        $user=$_POST['user'];  
        $pass=$_POST['pass'];  
      
        $con=mysqli_connect('localhost','root','Naveen@798@@') or die(mysql_error());  
        mysqli_select_db($con,'pcamc') or die("cannot select DB");  
      
        $query=mysqli_query($con,"SELECT * FROM login WHERE UserName='".$user."' AND password='".$pass."'");  
        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($query))  
        {  
        $dbusername=$row['UserName'];  
        $dbpassword=$row['password'];  
		$dpusertype=$row['Usertype'];
        }  
      
        if($user == $dbusername && $pass == $dbpassword)  
        {  
        session_start();  
        $_SESSION['sess_user']=$user;  
		$_SESSION['userType']=$dpusertype;  
	        
        header("Location: PCAMC/ViewStatus.php");  
        }  
        } 
		else 
		
	  {
	  header("location: PCAMC/warn.php");
	  }
      
    } 
    }  
    ?>
	<br><br><br><br>
                    <p class="link"> For AMC Engineers Only<br></p>
                 
</form></div></div><center>	
<div class=footer><b>
© 2022 Admin Team , Corporate Purchase.<br>
Any Suggestion contact our mail:amcpc@ecil.co.in
</div></b>
	</center>
 
        
</body>
</html>
