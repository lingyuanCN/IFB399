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
      <label for="">First Name</label>
      <input id="firstname" class="form-control" type="text" name="firstname" value="">
      <div class="input-error"></div>
    </div>
    <div class="form-group">
      <label for="">Last Name</label>
      <input id="lastname" class="form-control" type="text" name="lastname" value="">
      <div class="input-error"></div>
    </div>
    <div class="form-group">
      <label for="">Email</label>
      <input id="email" class="form-control" type="text" name="email" value="">
      <div class="input-error"></div>
    </div>
    <div class="form-group">
      <label for="">password</label>
      <input id="password" class="form-control" type="text" name="password" value="">
      <div class="input-error"></div>
    </div>
    <div class="form-group">
      <label for="">confirm</label>
      <input class="form-control" type="text" name="confirm" value="">
      <div class="input-error"></div>
    </div>
    <p>
      <input class="btn btn-primary" type="submit" name="btn-submit" value="submit">
    </p>
  </form>
  <?php
  if(isset($_POST['btn-submit']))
  {
    //获取input中用户输入的值
    $email=$_POST['email'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $password=$_POST['password'];
    //表单判断



    //连接数据库
    $link = @mysqli_connect('localhost','root','') or exit ('link failed');
    //设置字符编码
    @mysqli_query($link, 'set name utf8');
    //选择数据库
    @mysqli_select_db($link, 'data') or exit ('fail to select database');
    //定义query命令
    $sql="insert into user (userid,email,firstname,lastname,password) values (null,'$email','$firstname','$lastname','$password')";
    //插入注册用户信息
    @mysqli_query($link, $sql) or exit ('query failed');
    //关闭连接
    @mysqli_close($link);
  }
  ?>

  </table>
<script src="./js/jquery.js"></script>
<script src="./js/main.js"></script>
</body>
</html>
