<?php

if(isset($_POST['submit'])){

    $name= $_POST['name'];
    $mailFrom = $_POST['mail'];
    $values = $_POST['projects'];

foreach($_POST['projects'] as $values) {

    $mailTo = "jon@emerywd.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an email from ".$name.".\n\n".



    mail($mailTo, $txt, $values, $headers);
    header("Location: contact.html?mailsend");



}

}


?>