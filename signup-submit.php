<?php
    include ('../database/dbhelper.php');
    function eregi($email) {
        return (bool)preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $email);
    }
    if (isset($_POST['dangki']) && $_POST["email"] != '' && $_POST["pass"] != '' && $_POST["repass"] != ''){
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $repass = $_POST["repass"];
        $role = 0 ;
        if ( $pass != $repass) {
            echo "<script>alert('Mật khẩu không đúng')</script> <a href='javascript: history.go(-1)'>Trở lại</a>";
        }
        if (!eregi($email))
        {
            echo "<script>alert('Email không hợp lệ')</script> <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
        }
        $sql = "SELECT * FROM user WHERE email = '$email'";
        $old = mysqli_query($conn, $sql);
        if (mysqli_num_rows($old) > 0) {
            echo "<script>alert('Tài khoản đã tồn tại')</script> <a href='javascript: history.go(-1)'>Trở lại</a>";
        } else {
        $sql = "INSERT INTO user (email, pass, role) VALUES ('$email', '$pass', '$role')";
        mysqli_query($conn, $sql);
        
        header("location:/BTPHP/sign-up.php");
        }
    }
?>