<?php

if (isset($_POST['send_mail'])) {


    $to_email = $_POST['email'];
  //  $body = $_POST['body'];

    $subject = "Simple Email Test via PHP";

    $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
 
    $subject = 'Email verification';
    $body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';
    // $body = "Hi, This is test email send by PHP Script";
    $headers = "From:  webdevhasib21@gmail.com";
    
    if (mail($to_email, $subject, $body, $headers)) {
        echo "Email successfully sent to $to_email";
    } else {
        echo "Email sending failed...";
    }

}


?>
