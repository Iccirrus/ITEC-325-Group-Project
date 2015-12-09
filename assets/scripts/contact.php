<?php

   $name = $_POST['contactName'];
   $email = $_POST['contactEmail'];
   $subject = $_POST['subject'];
   $sentMessage = $_POST['messageOut'];

    function allErrorMessages($formInfo) {
        $errorMessages = array();
        if(strlen($formInfo['contactName']) = 0) {
            $errorMessages['contactName'] = "We need your name for contact purposes.";
	   }
        elseif(strlen($formInfo['contactName'] > 100)) {
            $errorMessages['contactName'] = "Entered name too long, must be 100 characters or less.";
	   }
        else {
            $errorMessages['contactName'] = 0;
	   }
	   
        if(!var_dump(filter_var($formInfo['contactEmail'], FILTER_VALIDATE_EMAIL))) {
            $errorMessages['contactEmail'] = "We need a valid email address from you.";
	   }
        else {
            $errorMessages['contactEmail'] = 0;
	   }
	   
        if(strlen($formInfo['subject']) = 0) {
            $errorMessages['subject'] = "Your message needs a subject!";
	   }
        elseif(strlen($formInfo['subject'] > 100)) {
            $errorMessages['subject'] = "This is only the subject of your message, the full message goes below!";
	   }
        else {
            $errorMessages['subject'] = 0;
	   }
	   
        if(strlen($formInfo['messageOut']) = 0) {
            $errorMessages['messageOut'] = "You cant send a blank message.";
	   }
        else {
            $errorMessages['messageOut'] = 0;
      }
	   return $errorMessages;
    }
    
    $formErrorArray = allErrorMessages($_POST);
    $formErrorMessage = "";

    if ($formErrorArray['contactName'] != 0) {
        $formErrorMessage .= "\nContact Name: ".$formErrorArray['contactName'];
    }
    if ($formErrorArray['contactEmail'] != 0) {
        $formErrorMessage .= "\nContact Email: ".$formErrorArray['contactEmail'];
    }
    if ($formErrorArray['subject'] != 0) {
        $formErrorMessage .= "\nEmail Subject: ".$formErrorArray['subject'];
    }
    if ($formErrorArray['messageOut'] != 0) {
        $formErrorMessage .= "\nEmail Message: ".$formErrorArray['messageOut'];
    }

    if($formErrorArray['contactName'] = 0 && $formErrorArray['contactEmail'] = 0 && $formErrorArray['subject'] = 0 && $formErrorArray['messageOut'] = 0) {
        $body = 'From: '.$name."\n".'E-Mail: '.$email."\n".'Message: '.$sentMessage;
        $head = 'From: '.$email."\r\n".'Reply-To: '.$email."\r\n";

        mail("rockclub@ntelos.net", $subject, $body, $head);
        print "<script language = \"javascript\" type = \"text/javascript\">".
	           "alert('Thank you for contacting us! We will reply to you shortly.');".
	           "window.location = '../../contact_us.html';".
	           "</script>";
        die();
    }
   
    else {
        print "<script language = \"javascript\" type = \"text/javascript\">".
	           "alert('Your submission had the following errors:".$formErrorMessage."');".
	           "window.location = '../../contact_us.html';".
	           "</script>";
        die();
    }
?>
