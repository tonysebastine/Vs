<?php
 
 
 

 require_once 'mailer/mailer/class.phpmailer.php'; 
  // creates object
$myfile = fopen("mailidandpassword.txt", "r") or die("Unable to open file!");
$emailid= fgets($myfile);
$pwd = fgets($myfile);
fclose($myfile);
  
  
  
  
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
    $mail->Username   ="amcpc@ecil.co.in";  
    $mail->Password   ="Amcpc@2734";            
    $mail->SetFrom('amcpc@ecil.co.in','Naveen');
    $mail->AddReplyTo("Amcpc@2734@ecil.co.in","Naveen");
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