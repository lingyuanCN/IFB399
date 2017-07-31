<?php
    $username = $_POST['username'];

    $link = mysqli_connect('localhost','root','') or exit ('link failed');
    //设置字符编码
    mysqli_query($link, 'set name utf8');
    //选择数据库
    mysqli_select_db($link, 'database') or exit ('fail to select database');
    //定义query命令
    $sql = "select * from user where username = '$username'";//检测数据库是否有对应的username
    $result = mysqli_query($link, $sql);//执行sql
    $rows = mysqli_num_rows($result);//返回一个数值
    if($rows)
    {//0 false 1 true
      echo "false";
    }
    else
    {
      echo "true";
    }
    //插入注册用户信息
    mysqli_query($link, $sql) or exit ('query failed');
    //关闭连接
    mysqli_close($link);

?>
