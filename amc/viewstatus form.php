<?php  
    if(isset($_POST["submit"])){  
      
    if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
        $user=$_POST['user'];  
        $pass=$_POST['pass'];  
      
        $con=mysqli_connect('localhost','wwwprint_root','Tony@124816') or die(mysql_error());  
        mysqli_select_db($con,'wwwprint_pcamc') or die("cannot select DB");  
      
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
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ViewStatus</title>
  <link rel="stylesheet"><link rel="stylesheet" href="formstyle.css">

</head>
  <script src="amc/pclogin2.js"></script>
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
<body>
<!-- partial:index.partial.html -->
<section class='login' id='login'>
  <div class='head'>
  <h1 class='company'>Engineer Login </h1>
  </div>
  <p class='msg'>Welcome</p>
    
				
				   
                
  <div class='form'>
  
    <form action="" method="POST">

 		 
				   
				   
                <div class='form'>
				
		
						
  <input type="text" placeholder='Username' class='text' id='username' required><br>
  <input type="password" placeholder='••••••••••••••' class='password'><br>
		
					<button class="btnn" input type="submit" name="submit">
                    Login</button>
					  <a href="https://10.19.8.13" class='btn-login' id='forgot'>home Page</a>

	<br><br><br><br>
                    <p class="link"> For AMC Engineers Only<br>
                 

                   

                </div>
                    </div>
                </div>
        </div>
    </div>
	</form>
	</section>
	</body>
	
</html>
<footer>
  <p>ECIL @ Corporate Purchase@</p>
  <p>Designed and Developed By OMSYSTEM TEAM. </a></p>
</footer>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
