<?php

if($_POST["submit"]) {
    $recipient="inf3rnus1@gmail.com";
    $subject="דף נחיתה";
    $sender=$_POST["sender"];
    $senderPhone=$_POST["senderPhone"];
    $message=$_POST["message"];

    $mailBody="שם: $sender\nטלפון: $senderPhone\n\n$message";

    mail($recipient, $subject, $mailBody, "From: website <website@rachelcenter.net16.net>");

}

?>