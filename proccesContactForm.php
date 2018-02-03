<?php

if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

if(isset($_POST['firstName'])) { $name = $_POST['firstName'];}
if(isset($_POST['email'])) { $email = $_POST['email'];}
if(isset($_POST['messageBox'])) { $enquiry = $_POST['messageBox'];}
$formErrors = false;
$headers = 'From: info@pavolvasko.co.uk' . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$to = "info@pavolvasko.co.uk"; //james.murdoch@live.co.uk
$subject = "JMC - Online form";
$message = "Name: " . $name . "\n\nMessage: \n" . $enquiry;

    if($name === '') :
        $formErrors = true;
        endif;

    if($enquiry === '') :
        $formErrors = true;
        endif;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
        $formErrors = true;
        endif;

    if(!($formErrors)) :
        if(mail($to, $subject, $message, $headers)):
            $successMsg = "Thank you, We will be in contact shortly";
            else:
            $errorMsg = "Error sending message!";
      endif;
    endif;
endif;
//form submitted
?>