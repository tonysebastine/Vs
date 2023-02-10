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
	$refno= $_GET['refno'];
	
	$con=mysqli_connect('localhost','root','Naveen@798@@') or die(mysql_error());  
    mysqli_select_db($con,'pcamc') or die("cannot select DB");  
	
	if($_SESSION["userType"]=="Admin")
	{
		 $sql1 = "update complaint set Admin_Verify_sts='CLOSED' where serialNumber=".$refno."";
		 $result=mysqli_query($con,$sql1);  
		echo mysqli_error($con);
        if($result)
		{  
        echo "Data Updated Successfully";  
		header("location:ViewStatus.php");
        }
		else
		{  
        echo "Error in Data Updation";  
        } 
	}
 
 ?>