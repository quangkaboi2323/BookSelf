<?php

$to_email = "nhvquangc3tbt@gmail.com";
$subject = "Simple email test via PHP";
$body = "hello";
$headers = "From: email";

if(mail($to_email,$subject,$body,$headers))
{
    echo "OK";
}
else{
    echo "Failed";
}
?>