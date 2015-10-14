<?php

   $name = $_POST[contactName];
   $email = $_POST[contactEmail];
   $messageTo = $_POST[recipient];
   $SubjectOf = $_POST[subject];
   $sentMessage = $_POST[messageOut];

   $mailTo = $messageTo;
   $subject = $subjectOf;

   $body = 'From: '.$name."\n";
   $body = 'E-Mail: '.$email."\n";
   $body = 'Message: '.$sentMessage;

   $head = 'From: '.$email."\r\n";
   $head = 'Reply-To: '.$email."\r\n";

   $status = mail(mailTo, $subject, $body, $head);

   if ($status) ( ?>
	<script language = "javascript" type = "text/javascript">
	   alert('Thank you for the message.  We will contact you shortly.');
	   window.location = 'contactForm.html';
	</script>
   <?php
   }
   else { ?>
	<script language = "javascript" type = "text/javascript">
	   alert('Message failed.  Please, send an email to ' .$mailTo);
	   window.location = 'contactForm.html';
	</script>
   <?php
   }
?>
