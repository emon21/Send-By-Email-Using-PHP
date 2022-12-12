<?php 




include('db.php');
$msg = "";

if (isset($_POST['reg'])) {

    if (isset($_GET['token'])) {
        $token =$_GET['token'];
    
        $new_pass = mysqli_real_escape_string($conn,$_POST['new_pass']);
        $confirm_pass = mysqli_real_escape_string($conn,$_POST['confirm_pass']);
        
        // $pass = password_hash($password,PASSWORD_BCRYPT);

        if ($new_pass == $confirm_pass) {

            $updateqry = "UPDATE reg_user SET password='$new_pass' WHERE token='$token'";
        
            $query = mysqli_query($conn,$updateqry);

            if ($query) {
               
                header('location:login.php');
            }

            else{

                echo 'Your Password Not Updated';
                header('location:reset_password.php');

            }

        }

        else{
            echo 'Password Not Match';
        }


    }

    else{
        echo 'No Token Found';

    }

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reset Password</title>
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
    <div class="card-header">Reset Your Password</div>
    <div class="card-body">
    <form action="" method="POST">

    <div class="form-group">
        <label for="new_pass">New Password:</label>
        <input type="password" class="form-control" placeholder="Enter New Passwors" id="new_pass" name="new_pass">
    </div>

    <div class="form-group">
    <label for="confirm_pass">Confirm Password:</label>
        <input type="password" class="form-control" placeholder="Enter Confirm Password" id="confirm_pass" name="confirm_pass">
    </div>
  
    <button type="submit" class="btn btn-primary w-100" name="reg">Reset Password</button>

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
