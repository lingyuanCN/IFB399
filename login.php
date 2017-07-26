<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Breathe Deeply</title>
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/main.css">
</head>
<body>
  <div class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a href="./index.php" class="navbar-brand">Breathe Deeply</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="./index.php">Homepage</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contact us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./login.php">Login</a></li>
        <li><a href="./register.php">Sign up</a></li>
      </ul>
    </div>
  </div>
  <form class="container container-small" action="register.php" method="post">
    <div class="form-group">
      <label for="">Email</label>
      <input class="form-control" type="text" name="" value="">
      <div class="input-error"></div>
    </div>
    <div class="form-group">
      <label for="">password</label>
      <input class="form-control" type="text" name="" value="">
      <div class="input-error"></div>
    </div>
    <p>
      <input class="btn btn-primary" type="submit" name="login" value="login">
    </p>
  </form>

<script src="./js/jquery.js"></script>
<script src="./js/main.js"></script>
</body>
</html>