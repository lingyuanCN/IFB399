<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Breathe Deeply</title>
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
  <div id="register" class="form container container-small">
    <h1>Sign up</h1>
    <form id="register-form" class="form-horizontal" action="register.php" method="post">
      <div class="form-group">
        <input id="username" class="form-control required" type="text" name="username" value="" maxlength="20" placeholder="Username">
      </div>
      <div class="form-group">
        <input id="email" class="form-control" type="text" name="email" value="" maxlength="20" placeholder="Email">
      </div>
      <div class="form-group">
        <input id="password" class="form-control" type="password" name="password" value="" maxlength="20" placeholder="Password">
      </div>
      <div class="form-group">
        <input id="confirm_password" class="form-control" type="password" name="confirm_password" value="" maxlength="20" placeholder="Confirm Password">
      </div>
      <input class="btn btn-primary" type="submit" name="signup" value="Sign up">
    </form>

  </div>

<?php
if(isset($_POST['signup']))
{
  //获取input中用户输入的值
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  //表单判断



  //连接数据库
  $link = mysqli_connect('localhost','root','') or exit ('link failed');
  //设置字符编码
  mysqli_query($link, 'set name utf8');
  //选择数据库
  mysqli_select_db($link, 'database') or exit ('fail to select database');
  //定义query命令
  $sql="insert into user (userid,email,username,password) values (null,'$email','$username','$password')";
  //插入注册用户信息
  mysqli_query($link, $sql) or exit ('query failed');
  //关闭连接
  mysqli_close($link);

}
?>

  </table>
<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="./js/form-validate.js"></script>
</body>
</html>
