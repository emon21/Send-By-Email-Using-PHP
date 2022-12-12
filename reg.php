
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registratin Form</title>
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
    <div class="card-header">Registration From</div>
    <div class="card-body">
    <form action="reg_process.php" method="POST">
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
    </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
  </div>
  <!-- <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div> -->
  

    </div> 
    <div class="card-footer">
        <button type="submit" class="btn btn-primary" name="reg">Add User</button>
        <a href="login.php" type="submit" class="btn btn-success float-right pt-2">Login</a>
</div>
    </form>
  </div>
  </div>

  </div>
  
 
</div>

</body>
</html>
