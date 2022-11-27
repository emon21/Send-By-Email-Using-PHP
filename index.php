
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home :: Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>User form</h2>
  <form action="mail.php" method="POST" class="flex justify-content-center col-sm-6">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

    <div class="form">
    <label for="comment mb-2">Comments</label>
  <textarea class="form-control" id="comment" name="body" placeholder="Comment goes here"></textarea>
</div>

    <button type="submit" class="btn btn-primary mt-2" name="send_mail">Send Mail</button>
  </form>
</div>

</body>
</html>

