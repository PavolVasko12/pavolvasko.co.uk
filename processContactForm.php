<?php

if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):

if(isset($_POST['firstName'])) { $name = $_POST['firstName'];}
if(isset($_POST['email'])) { $email = $_POST['email'];}
if(isset($_POST['subject'])) { $subjectMessage = $_POST['subject'];}
if(isset($_POST['messageBox'])) { $enquiry = $_POST['messageBox'];}
$formErrors = false;
$headers = 'From: info@pavolvasko.co.uk' . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$to = "pavol.vasko.sk@gmail.com";
$subject = "Pavol Vasko - Online form";
$message = "Name: " . $name . "\n\nSubject: " . $subjectMessage . "\n\nMessage: \n" . $enquiry;

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
        if(mail('info@pavolvasko.co.uk', $subject, $message, $headers)):
            $successMsg = "Thank you, I will be in contact shortly";
            else:
            $errorMsg = "Error sending message!";
      endif;
    endif;
endif;
//form submitted
?>
