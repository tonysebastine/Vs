<html>
<head>

</head>
<body>
<form name="myform1" action =""  method="GET"> 
<?php   

    session_start();  
          
	$con=mysqli_connect('localhost','root','') or die(mysql_error());  
	mysqli_select_db($con,'amc') or die("cannot select DB");  
	mysqli_close($con);
	
?>

<table border=3>
	    <tr><td>Module Name</td><td><input type=text name=modname ></td></tr> 
		<tr ><td colspan =2><center><input type=button onclick =CheckData() value='Submit'><center></td> </tr>


<?php




?>
</form>
</body>
<html>