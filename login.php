<?php
session_start();
include('connect.php');
$error = [];
$hasData = isset($_POST['user']) && isset($_POST['pass']);

if (isset($_POST['Login'])) {
    
    $u = $_POST['user'] ?? '';
    $p = $_POST['pass'] ?? '';
    $checkLogin = true;
    $sqll = "select * from tai_khoan where User = '$u' and Pass = '$p'";
    $query_ = mysqli_query($conn, $sqll);
    
    if(empty($u)){
        $error['user'] = "Hãy nhập UserName";
        $checkLogin = false;
    }
    if(empty($p)){
        $error['pass'] = "Hãy nhập Password";
        $checkLogin = false;
    }
    $re = mysqli_fetch_assoc($query_);
    if(mysqli_num_rows($query_) === 1){
        $_SESSION['Loginn'] = $re;
        $_SESSION['addd']   = $re;
        $_SESSION['editt']  = $re;
         $_SESSION['user']   = 'user';
        $_SESSION['pass']  = 'pass';
        header("location:admin.php");
    }elseif($checkLogin){
        $error['all'] = 'Thông Tin Đăng Nhập Sai !';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Đăng nhập hệ thống</title>
    <style type="text/css">
      #container{
        background:#fff;
      }
      body{
        background-image: url(img/login.jpg);
      }

    </style>
</head>
<body>
  <div id="ok">
    <div id="container" style="width: 600px; height: 400px; border:2px red solid; margin:auto;margin-top: 100px; text-align: center;">
            <div style="height: 100px; width: 500px; margin:auto; text-align: center;">
              <h4><a href="index.php" style="width: 200px;margin-top: 20px;">P&T MILK</a></h4>
            </div>
                            
               <form action="" method="POST" role="form" id="form">
                    <div  style="color: red; font-size: 14px">
                         <?= $error['all'] ?? '' ?>
                    </div>
                  <div class="form-user">
                <label for="" style="padding-right: 60px;">User</label>
                  <input type="text" placeholder="tên đăng nhập" id="user" name="user" autocomplete="off">
                       <i class="fa fa-check-circle-o"></i>
                     <i class="fa fa-exclamation-circle"></i>
                        <small><?=$error['user'] ?? ''?></small>
                        </div>
                          <div class="form-user">
                      <label for="" style="padding-right: 10px;">PassWord</label>
                           <input type="password" placeholder="mật khẩu" id="pass" name="pass" autocomplete="off">
                          <i class="fa fa-check-circle"></i>
                       <i class="fa fa-exclamation-circle"></i>
                     <small><?=$error['pass'] ?? ''?></small>
                 </div>
                                
                <div class="form-user">
                    <button type="submit" style="width: 500px; margin-top: 20px;" for="" name="Login">Đăng Nhập</button>
                </div>
         </form>
    </div>
  </div>                   
    <script>
        document.getElementById('click_login').addEventListener('click', function() {
            document.querySelector(".login").style.display = "flex";
        })
    </script>
</body>

</html>