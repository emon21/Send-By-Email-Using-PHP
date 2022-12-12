
<?php

include('db.php');
session_start();

if (isset($_POST['login'])) {
   
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = mysqli_query($conn,"SELECT * FROM reg_user WHERE email='$email' AND password ='$password'");

    $check = mysqli_num_rows($sql);

    if($check>0){
        $row = mysqli_fetch_assoc($sql);
        $verification_status = $row['verification_status'];
        if($verification_status == 0){
            echo 'you have not confirmed your account.Please check your inbox and verify your email id.';
        }
        else{
            echo 'done';
            $_SESSION['IS_LOGIN'] = 1;
            header('location:home.php');
        }

    }
else{
    echo 'Please enter corect login info';
}

}

?>
