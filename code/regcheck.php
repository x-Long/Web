<?php
header("Content-Type: text/html; charset=utf8");

//获取post值
$username=$_POST['username'];
$password=$_POST['password'];
$phonenum=$_POST['phonenum'];
$name=$_POST['name'];
$email=$_POST['email'];

//链接数据库
include('connect.php');

//向数据库插入表单传来的值的sql
$q="insert into user(id,username,password,phonenum,name,email) values (null,'$username','$password','$phonenum','$name','$email')";

//执行sql
$reslut=mysql_query($q,$con);
if (!$reslut){
        die('Error:'.mysql_error());
}else{echo "<h1>注册成功,2秒后将返回登录页面<h1>";
      echo "<script>  setTimeout(function(){window.location.href='login.php';},2000);</script> ";
}

//关闭数据库
mysql_close($con);
?>