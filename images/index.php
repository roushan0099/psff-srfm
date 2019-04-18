<?php

if ($_FILES["file"]["error"] > 0)
    echo "Error: " . $_FILES["image"]["error"] . "<br />";
else
{
    echo "Upload: " . $_FILES["image"]["name"] . "<br />";
    echo "Type: " . $_FILES["image"]["type"] . "<br />";
    echo "Size: " . ($_FILES["image"]["size"] / 1024) . " Kb<br />";
    echo "Stored in: " . $_FILES["image"]["tmp_name"];
}
 
$email_from = 'roushansingh0099pc@gmail.com';
  
$email_subject = "registration-form-details";
$to = "roushansingh0099pc@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: form.index.html");
?>
