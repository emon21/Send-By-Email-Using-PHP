<?php 




include('db.php');
$msg = "";

if (isset($_POST['reg'])) {


    $email = mysqli_real_escape_string($conn,$_POST['email']);

    $query = mysqli_query($conn,"SELECT * FROM reg_user WHERE email='$email'");
    $check = mysqli_num_rows($query);

    if ($check) {
        $userdata = mysqli_fetch_assoc($query);
        $token = $userdata['token'];
      
       $mainHtml = "Click here To Reset Your Password:
       http://localhost/email_send/reset_password.php?token=$token";

       // mail send

        smtp_mailer($email,'Password Reset',$mainHtml); 

    }

    else{
        echo 'No Email Found'; 
    }


}


function smtp_mailer($to,$subject,$msg){

    include('smtp/PHPMailerAutoload.php');
        
    $mail = new PHPMailer(); 
    //$mail->SMTPDebug=3;
    $mail->IsSMTP(); 
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'type'; 
    $mail->Host = "smtp.gmail.com";
    $mail->Port = "587"; 
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "webdevhasib21@gmail.com";
    $mail->Password = 'rlymqdmwqvrjoifk';
    $mail->SetFrom('webdevhasib21@gmail.com');
    $mail->Subject = $subject;
    $mail->Body =  $msg;
    $mail->AddAddress($to);

    // $mail->send();

    // $mail->SMTPOptions=array('ssl'=>array(
    //     'verify_peer'=>false,
    //     'verify_peer_name'=>false,
    //     'allow_self_signed'=>false
    // ));
    if(!$mail->Send()){
        echo $mail->ErrorInfo;
    }else{
        echo 'Sent';
        header('location:login.php');
    }

   }



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Recovery Mail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body> 

<div class="container mt-3">
    
    <div class="d-flex justify-content-center">
      
  <div class="col-sm-6 flex justify-content-center mt-4">
  <div class="card">
    <div class="card-header">Recovery Your Account</div>
    <div class="card-body">
    <form action="" method="POST">
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
    </div>
  
    <button type="submit" class="btn btn-primary w-100" name="reg">Send Mail</button>

    </div> 
    <div class="card-footer d-flex">
    <p>Have an account?</p>
<a href="login.php" class="pl-2">Click Here</a> 
    </div>
    </form>
  </div>
  </div>

  </div>
  
 
</div>

</body>
</html>
