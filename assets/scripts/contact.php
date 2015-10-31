<?php

if(!empty($_POST) {
   $name = $_POST['contactName'];
   $email = $_POST['contactEmail'];
   $subject = $_POST['subject'];
   $sentMessage = $_POST['messageOut'];

   $body = 'From: '.$name."\n".'E-Mail: '.$email."\n".'Message: '.$sentMessage;

   $head = 'From: '.$email."\r\n".'Reply-To: '.$email."\r\n";

   mail("lingenedil@gmail.com", $subject, $body, $head);
    print "<script language = \"javascript\" type = \"text/javascript\">".
	   "alert('Thank you for contacting us! We will reply to you shortly.');".
	   "window.location = 'contact_us.html';".
	"</script>";
    die();
}
?>
