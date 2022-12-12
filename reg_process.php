<?php 




include('db.php');
$msg = "";

if (isset($_POST['reg'])) {


    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    

    // $pass = password_hash($password,PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    $check = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM reg_user WHERE email='$email'"));

    if ($check > 0) {
       echo "Email Address Already Inserted";
    }

    else{

        $ins = mysqli_query($conn,"INSERT INTO reg_user(email,password,token,verification_status) VALUES ('$email','$password','$token','0')");

        $id = mysqli_insert_id($conn);

       $msg = "We have just sent a verification link to $email</br></br> Please check your inbox and clock on the link to get started.if you can't find this email (which chuld be due to spam filter),just request a new one here";

       $mainHtml = "Please Confirm your account registration by clicking the button or link below :
        <a href='http://localhost/email_send/account_activation.php?id=$id'>
        account active</a>";

       // mail send

        smtp_mailer($email,'Account Verification',$mainHtml); 

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
        header('location:reg.php');
    }

   }



?>
