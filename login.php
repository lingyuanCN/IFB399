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
  <div id="login" class="form container container-small">
    <h1>Login</h1>
    <form id="login-form" class="form-horizontal" action="login.php" method="post">
      <div class="form-group">
        <input id="email" class="form-control required" type="text" name="email" value="" placeholder="Email">
      </div>
      <div class="form-group">
        <input id="password" class="form-control" type="password" name="password" value="" placeholder="Password">
      </div>
      <input class="btn btn-primary" type="submit" name="login" value="Login">
    </form>
  </div>

  <?php
  if(isset($_POST['login']))
  {
    //获取input中用户输入的值
    $email=$_POST['email'];
    $password=$_POST['password'];
    //表单判断



    //连接数据库
    $link = mysqli_connect('localhost','root','') or exit ('link failed');
    //设置字符编码
    mysqli_query($link, 'set name utf8');
    //选择数据库
    mysqli_select_db($link, 'database') or exit ('fail to select database');
    //定义query命令
    $sql="select password from user where email = $email";

    //插入注册用户信息
    if ($email && $password){//如果用户名和密码都不为空
       $sql = "select * from user where email = '$email' and password='$password'";//检测数据库是否有对应的username和password的sql
       $result = mysqli_query($link, $sql);//执行sql
       $rows = mysqli_num_rows($result);//返回一个数值
       if($rows)
       {//0 false 1 true
         echo "success";
         $rs = mysqli_fetch_array($result);
         //set cookie
         $expire=time()+60*60;
         setcookie("user", "$rs[username]", $expire);
         //重定向浏览器
         header("Location: ./index.php");
         //确保重定向后，后续代码不会被执行
         exit;
       }
       else
       {
          echo "failed";
          exit;
       }


    }
    else
    {//如果用户名或密码有空
      echo "please enter your email and password to login";
    }
    //关闭连接
    mysqli_close($link);
  }
  ?>


<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="./js/login-validate"></script>
</body>
</html>
