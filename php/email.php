<?php
  if(isset($_POST['submit'])){
    $to = "rasholuoch@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Message from portfolio";
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['form-message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent successfully. Thank you " . $name . ", I will contact you shortly.";
  }
?>