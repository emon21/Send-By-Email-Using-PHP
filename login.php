
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
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
    <div class="card-header">Login From</div>
    <div class="card-body">
    <form action="login_check.php" method="POST">
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
    </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>

    </div> 
    <div class="card-footer">
        <button type="submit" class="btn btn-primary" name="login">Login</button>
        <a href="reg.php" type="submit" class="btn btn-success float-right pt-2">sign Up</a>
</div>
<div class="pl-4 pb-3 pt-2 d-flex">
<p>Forget Your Password No Warry?</p>
<a href="recover_email.php" class="pl-2">Click Here</a>
</div>
    </form>
  </div>
  </div>

  </div>
  
 
</div>

</body>
</html>
