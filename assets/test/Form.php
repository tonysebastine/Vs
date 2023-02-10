 <html lang="en">
<head>
 <title>ViewStatus</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="PCAMC/style.css">
	 
  <link rel="stylesheet"><link rel="stylesheet" href="formstyle.css">
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
  
  <script src="PCAMC/pclogin2.js"></script><script type="text/javascript" src="contact us_files/naveen_script.js"></script>
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
<script type="text/javascript">
inactivityTimeout = true
resetTimeout()
function onUserInactivity() {
   window.location.href = "http://10.19.8.13/"
}
function resetTimeout() {
   clearTimeout(inactivityTimeout)
   inactivityTimeout = setTimeout(onUserInactivity, 1000 * 60)
}
window.onmousemove = resetTimeout

    window.history.forward();
    function noBack()
    {
        window.history.forward();
    }
</script>
<body oncontextmenu="return false" onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">

 <section class='login' id='login'>
 <div class='head'>
 <h1 class='company'>Engineer Login </h1>
				 </div> <p class='msg'>Welcome</p>    
				
				   
                <div class="form">
				  <form action="" method="POST"> 
				   
			
										
  <input type="text" name="user"placeholder='Username' class='text' id='username'required><br>
  <input type="password" name="pass"placeholder='••••••••••••••'class='password'><br>
  <!--<input type="text" placeholder='Username' class='text' id='username' required><br>
  <input type="password" placeholder='••••••••••••••' class='password'><br>-->
        
					
              
					<button class="btn-login" input type="submit" name="submit">
                    Login</button>
										  <button class='forgot' id='forgot'><a href="http://10.19.8.13/" ><font color="#fff">Home Page</a></button></font>

<?php  
    if(isset($_POST["submit"])){  
      
    if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
        $user=$_POST['user'];  
        $pass=$_POST['pass'];  
      
        $con=mysqli_connect('localhost','root','Naveen@798@@') or die(mysql_error());  
        mysqli_select_db($con,'naveen') or die("cannot select DB");  
      
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
	        
        header("Location: viewstatus4user.php");  
        }  
        } 
		else 
		
	  {
	  header("location: warn.php");
	  }
      
    } 
    }  
    ?>
	<br><br><br><br>
                    <p class="link"> For AMC Engineers Only<br>
                 

                   
</form>
              </div>
                    </div>
                </div>
        </div>
    </div></section>
	</body>
</html>