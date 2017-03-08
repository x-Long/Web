<?php
header("Content-Type: text/html; charset=utf8");

//开启session
session_start();

//检测是否登录，若没登录则转向登录界面
if($_SESSION['login']!=1){
    header("Location:login.php");
    exit();
}

//数据库连接
include('connect.php');
$username = $_SESSION['username'];
$user_query = mysql_query("select * from user where username=$username");
$row = mysql_fetch_assoc($user_query);

//为个人信息页设置session
$_SESSION['phonenum']=$row['phonenum'];
$_SESSION['username']=$row['username'];
$_SESSION['name']=$row['name'];
$_SESSION['email']=$row['email'];
$_SESSION['password']=$row['password'];

//跳转至个人信息页
header("Location:home.php");
?>