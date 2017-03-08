<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{background-image: url(img/2.jpg);
            font-weight: normal;background-size:cover;
            color: #333;
            font-size: 16px;font-family: "Microsoft Yahei";
        }
        #center{
            width: 370px;height: 290px;background-color: white;margin:0 auto;margin-top: 130px; border-radius:8px;overflow: hidden;opacity: 0.9
        }
        .top{height: 55px;border-bottom: 1px #e2e2e2 solid;line-height: 55px;padding-left: 20px;font-size: 18px;
        }

        tr{height:50px;border:1px;text-align: right;
        }
        .dll{width:205px;border-color: #e2e2e2;height:40px;border-radius:6px;font-size: 18px
        }
        .dl{width:150px;height:40px;margin-left:82px;margin-top: 15px;border-radius:8px;background-color: rgb(39, 149, 220);color: #e2e2e2;font-size: 18px;
        }
        a{text-decoration:none; color: rgb(130,180,60);
        }
        a:hover{text-decoration:underline;  font-style:
        }
    </style>
</head>
<body>
    <div id="center">
        <div class="top"><h3>快速<a href="index.php">注册</a></h3></div>
        <div class="main">
        <form action="logincheck.php" method="post">
            <table>
                <tr >
                    <td style="width:80px" >账号：</td>
                    <td><input class="dll" type="text" name="username"> </td>
                </tr>

                <tr>
                    <td style="width:80px" >密码：</td>
                    <td><input class="dll" type="password" name="password"></td>
                </tr>
                <br>
            </table>
            <input class="dl" type="submit" value="登录">
        </form>
        </div>
    </div>
</body>
</html>