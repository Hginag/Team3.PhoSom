
<!Doctype HTML>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    <script src="https://kit.fontawesome.com/41e46c9144.js" crossorigin="anonymous"></script>
    <title>Đăng nhập</title>
    <link rel='stylesheet' href="/BTPHP/sign.css"/>
    <link rel='stylesheet' href="/BTPHP/styles.css"/>
</head>
<body>
    <!--Header-->
	<?php
        require "Header.php";
    ?>
     <div class="wrapper" style ="margin-left: 550px">
        <span class="icon-close">
            <ion-icon name="close-outline"><p>X</p></icon-icon>
        </span>

        <div class="form-box login">
            <h2>Đăng nhập</h2>
            <form action="/BTPHP/signin_submit.php" method="post" onsubmit = "return validateData()">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                        <input type="email" name="email" required>
                        <label>Email</label>

                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input type="password" name= "pass" required>
                        <label>Mật khẩu</label>
                </div>
                <div class = "box" style="margin: 30px 5px 30px ; color: #162938;">
                    <tr>
                        <td>Quyền</td>
                        <td>
                            <select name="role" style = "padding: 5px 0px; border: 2px solid #162938; border-radius: 10px">
                                <option value="1">Admin</option>
                                <option value="0" selected="selected">Khách hàng</option>
                            </select>
                        </td>
                    </tr>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                    Lưu mật khẩu</label>
                    <a href="#">Quên mật khẩu?</a>
                </div>
                <button type="submit" name="dangnhap" class="btn" value ="dangnhap"style = "margin-left: 0px;">Đăng nhập</button>
            
                <div class="login-register">
                    <p>Bạn chưa có tài khoản?><a href='sign-up.php' class="register-link">Đăng kí</a></p>
                </div>
            </form>
        </div>
    </div>
    <?php
        require "Footer.php";
    ?>
   
</body>
</html>