<?php
 
 
 

 require_once 'mailer/mailer/class.phpmailer.php'; 
  // creates object

  
 $emailid='amcpc@ecil.co.in';
 $pwd = 'Amcpc@2734';
  
 // echo $emailid;
 // echo $pwd;
  
  $mail = new PHPMailer(true); 
  if(isset($_POST['btn_send']))
  {
   $email      = strip_tags($_POST['email']);
   $subject    = strip_tags($_POST['subject']);
   $text_message    = "Hello";      
   $message  = strip_tags($_POST['message']);
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
	$mail->Username=$emailid;
	$mail->Password= $pwd;
	$mail->SetFrom($emailid,'Computer AMC ');
	$mail->AddReplyTo($emailid,"Computer AMC ");
    /* $mail->Username   ="amcpc@ecil.co.in";  
       $mail->Password   ="Amcpc@2734";    
	   $mail->SetFrom('amcpc@ecil.co.in','Naveen');
       $mail->AddReplyTo("amcpc@ecil.co.in","Naveen");*/ 
    $mail->Subject    = $subject;
    $mail->Body    = $message;
    $mail->AltBody    = $message;
     
    if($mail->Send())
    {
     
     $msg = "Hi, Your mail successfully sent to".$email." ";
         }
	 $mail->ClearAllRecipients();
   }
   catch(phpmailerException $ex)
   {
    $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
	echo 'Mailer Error: ' . $mail->ErrorInfo;
   }
  } 
  

?>