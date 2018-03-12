<?php

$from = $_POST['email'];


$sendTo = 'jon@emerywd.com';


$subject = 'New message from contact form';


$fields = array('name' => 'Name', 'surname' => 'Last Name', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message', 'checkbox1' => 'What I am looking for','checkbox2' => 'What I am looking for','checkbox3' => 'What I am looking for','checkbox4' => 'What I am looking for','checkbox5' => 'Do you have a site','checkbox6' => 'Do you have a site', 'link' => 'Link', 'checkbox7' => 'The website i am looking for is','checkbox8' => 'The website i am looking for is','checkbox9' => 'The website i am looking for is','checkbox10' => 'The website i am looking for is','checkbox11' => 'The website i am looking for is','checkbox12' => 'The website i am looking for is','checkbox13' => 'I am looking for this feature','checkbox14' => 'I am looking for this feature','checkbox15' => 'I am looking for this feature','checkbox16' => 'I am looking for this feature','checkbox17' => 'I am looking for this feature','checkbox18' => 'Web hosting','checkbox19' => 'Web hosting','checkbox20' => 'Web hosting','checkbox21' => 'Do you have a budget','checkbox22' => 'Do you have a budget', 'link1' => 'Our budget is');


$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';


$errorMessage = 'There was an error while submitting the form. Please try again later';


error_reporting(E_ALL & ~E_NOTICE);

try
{

    if(count($_POST) == 0) throw new \Exception('Form is empty');

    $emailText = "You have a new message from your contact form\n=============================\n";

    foreach ($_POST as $key => $value) {
        
        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    
    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from,
    );

    
    mail($sendTo, $subject, $emailText, implode("\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


if ($responseArray['type'] == 'success') {
   

    header('Location: /success');
}
else {
    
    header('Location: /failed');
}