<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "iuliatoghie@yahoo.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    //send email
    mail($admin_email, "New Form Submission", $phone, "From:" . $email);
    
    header('Location: http://edgeledger.net/success.html');
  }