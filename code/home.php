<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>个人中心</title>
    <style>
        *{margin: 0;
            padding: 0;
        }

        body{background-image: url(img/3.jpg);
            font-weight: normal;background-size:cover;
            color: #333;
            font-family: "Microsoft Yahei";
        }

        #center{width: 620px;height: 410px;background-color: white;margin: 0 auto;margin-top: 100px;border-radius:15px;opacity: 0.8;
        }

        .top{height: 70px;border-bottom: 1px #e2e2e2 solid;margin-bottom: 12px;line-height: 70px;text-align: center;font-size: 18px;letter-spacing: 5px;}
        tr{height:50px;
        }

        .left{text-align: right;letter-spacing: 5px;padding-right:10px;
        }

        input{width: 250px;height: 35px; border-color: #e2e2e2;height:40px;border-radius:6px;font-size: 18px;
        }

        .sub{width: 150px;height: 40px;border-radius:8px;background-color: rgb(80, 149, 220);color:#e2e2e2;font-size: 20px;
        }

        a{text-decoration:none; color: rgb(130,180,60);
        }

        a:hover{text-decoration:underline;
        }

    </style>
</head>
<body>
    <div id="center">
        <div class="top"><h1>个人信息</h1></div>
        <div class="bottom">
        <form action="regcheck.php" method="post">
             <table>
                <tr>
                    <td class="left" style="width:250px;  "><h3>用户名：</h3></td>
                    <td style="width:410px">
                    <?php session_start(); echo "<h3>{$_SESSION['username']}</h3>";?>
                    </td>
                </tr>
                <tr>
                    <td class="left"><h3>密码：</h3></td>
                    <td><?php echo "<h3>{$_SESSION['password']}</h3>";?></td>
                </tr>
                <tr>
                    <td class="left"><h3>邮箱：</h3></td>
                    <td><?php echo "<h3>{$_SESSION['email']}</h3>";?></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="left"><h3>姓名：</h3></td>
                    <td><?php echo "<h3>{$_SESSION['name']}</h3>";?></td>
                </tr>
                <tr>
                    <td class="left"><h3>手机：</h3></td>
                    <td><?php echo "<h3>{$_SESSION['phonenum']}</h3>";?></td>
                </tr>
                <tr>
                    <td class="left"></td>
                    <td><a href="loginout.php?action=logout"><input class="sub" type="button" value="注销登陆"></a></td>
                </tr>
            </table>
        </form>
        </div>
</body>
</html>