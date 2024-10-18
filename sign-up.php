<!Doctype HTML>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    <script src="https://kit.fontawesome.com/41e46c9144.js" crossorigin="anonymous"></script>
    <title>Đăng ký</title>
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

        <div class="form-box register">
            <h2>Đăng ký</h2>
            <form action="/BTPHP/signup_submit.php" method="post" onsubmit = "return validateData()">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                        <input id="username" name ="username" type="uername" required>
                        <label>Username</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                        <input id="email" name ="email" type="email" required>
                        <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input id="password" type="password"name="pass" required>
                        <label>Mật khẩu</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input id="password" type="password" name ="repass" required>
                        <label>Xác nhận mật khẩu</label>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox" required>
                    Tôi đồng ý với chính sách & điều khoản</label>
                </div>

                <button id="btnregister" type="submit" class="btn" name="dangki" value ="dangki" style = "margin-left: 0px;">Đăng ký</button>
                <div class="login-register">
                    <p>Đã có tài khoản><a href='sign-in.php' class="login-link" name="dangnhap" value="dangnhap">Đăng nhập</a></p>
                </div>
            </form>
        </div>
    </div>
    <!--Footer-->
	<?php
        require "Footer.php";
    ?>
   
</body>
</html>
    
</body>
</html>