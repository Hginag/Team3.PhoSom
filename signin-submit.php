<?php
    session_start();
    include ('..\database\config.php');
    if (isset($_POST['dangnhap']) && $_POST["email"] != '' && $_POST["pass"] != '' && $_POST["role"] != '' ){
          $email = $_POST["email"];
          $pass = $_POST["pass"];
          $role = $_POST["role"];
          if ($role == "1") {
            $sql = "SELECT * FROM user WHERE email='$email' AND pass='$pass' AND role='$role'";
            $old = mysqli_query($conn, $sql);
            if (mysqli_num_rows($old) > 0) {
                $_SESSION['email'] = $email;
                $role = 1;
                $_SESSION['role'] = $role;
            } else {
                echo "<script>alert('Email hoặc mật khẩu không đúng')</script> <a href='javascript: history.go(-1)'>Trở lại</a>";
            }
        }
        if ($role == "0") {
          $sql = "SELECT * FROM user WHERE email='$email' AND pass='$pass' AND role='$role'";
          $old = mysqli_query($conn, $sql);
          if (mysqli_num_rows($old) > 0) {
              $_SESSION['email'] = $email;
              $role = 0 ;
              $_SESSION['role'] = $role;
          } else {
                echo "<script>alert('Email hoặc mật khẩu không đúng')</script> <a href='javascript: history.go(-1)'>Trở lại</a>";
          }
      }
      $conn->close();
  }
  
?>