<?php
  session_start();
  include("conn.php");
  
  if(isset($_POST['recovery']))
  {
	  $Email=$_POST['Email'];
	  $sql="SELECT * FROM user WHERE Email='" . $Email . "'" ;
	 $result=$conn->query($sql);
	$row = $result->fetch_assoc();	
	$count=mysqli_num_rows($result);

	  if($count>0)
	  {
		  echo "hello";
			if(!class_exists('PHPMailer')) {
				require('class.phpmailer.php');
				require('class.smtp.php');
			}

			//require_once("mail_configuration.php");

			$mail = new PHPMailer();

			$emailBody = "Hello your password is $data[1]";

			$mail->IsSMTP();
			$mail->SMTPDebug = 2;
			$mail->SMTPAuth = TRUE;
			$mail->SMTPSecure = "tls";
			$mail->Port     = 465;  
			$mail->Username = "contact.mlingo@gmail.com";
			$mail->Password = "adminroot123";
			$mail->Host     = "smtp.gmail.com";
			//$mail->Mailer   = MAILER;

			$mail->SetFrom("contact.mlingo@gmail.com"," mlingo");
			$mail->AddReplyTo("contact.mlingo@gmail.com"," mlingo");
			$mail->ReturnPath="contact.mlingo@gmail.com";	
			$address=$count[4];
			echo $address;
			$mail->AddAddress($address,"asdsfer");
			$mail->Subject = "Forgot Password Recovery";		
			$mail->MsgHTML($emailBody);
			$mail->IsHTML(true);

			if(!$mail->Send()) {
				$error_message = 'Problem in Sending Password Recovery Email';
			} else {
				$success_message = 'Please check your email to reset password!';
			}


	  }
	  else
	  {
		  echo "email not found in our database";
	  }
	  
  }



?>
<!DOCTYPE html>
<html>
<head>
<title>Username/Password Recovery</title>
</head>
<body>
<form action="forgotu.php" method ="post">
<input type="text" name="Email" placeholder="Email">
<input type="submit" name="recovery" value="Recovery">
</form>
</body>
</html>