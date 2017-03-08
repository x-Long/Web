<?php
header("Content-Type: text/html; charset=utf8");

//开启session
session_start();

//注销登录
if($_GET['action'] == "logout"){
    unset($_SESSION['login']);
    unset($_SESSION['username']);
    unset($_SESSION['phonenum']);
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    echo '注销登录成功！点击此处 <a href="login.php">登录</a>';
    exit;
}
?>