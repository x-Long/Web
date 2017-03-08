<?PHP
session_start();
header("Content-Type: text/html; charset=utf8");

//链接数据库
include('connect.php');

$username = $_POST['username'];
$passowrd = $_POST['password'];
if ($username && $passowrd){$sql = "select * from user where username = '$username' and password='$passowrd'";
//检测数据库是否有对应的username和password的值
  $result = mysql_query($sql);//执行sql
  $rows=mysql_num_rows($result);//返回一个数值
  $row = mysql_fetch_assoc($result);
  if($rows){$_SESSION['username'] = $username;
            $_SESSION['login'] = 1;
    echo $row['name'];
    echo '欢迎你！进入 <a href="my.php">用户中心</a><br/>';
    echo '点击此处 <a href="loginout.php?action=logout">注销</a> 登录！<br />';
    exit;}else{echo "<h1>您的用户名或密码错误,2秒后将返回<h1>";
          }
    echo "<script>  setTimeout(function(){window.location.href='login.php';},2000); </script> ";//如果错误使用js 2秒后跳转到登录页面重试;
    }else{echo "表单填写不完整";
          echo " <script> setTimeout(function(){window.location.href='login.php';},2000);</script>"; //如果错误使用js 2秒后跳转到登录页面重试;
    }

//关闭数据库
mysql_close();
?>