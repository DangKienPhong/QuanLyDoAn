<?php
ob_start();

include_once "../ketnoisql/ketnoi.php";
// if (count($_POST) > 0) {
//     $username = $_POST["txt_email"];
//     $passwd = $_POST["txt_password"];
//     if ($username == "phamtienlong135@gmail.com" && $passwd == "12345") {
//        session_start();
//        $_SESSION["user_name"]= $username;


//        header("Location: ../quanlydonhang.php");

//     }
//     else{
//         header("Location: ../page-login.php");
//     }
// }
if (count($_POST) > 0) {
    $username = $_POST["txt_email"];
    $passwd = $_POST["txt_password"];
    if (isset($username) && isset($passwd)) {
        $sql = "SELECT * FROM admin WHERE ten_admin = '$username' AND mat_khau = '$passwd'";
        $query = mysqli_query($conn, $sql);
        $rows = mysqli_num_rows($query);
        if ($rows > 0) {
            session_start();
            $_SESSION["user_name"] = $username;
            $_SESSION["mat_khau"] = $passwd;
            header("Location: ../quantri.php");
        }
        else{
        echo '
           <!DOCTYPE html>
           <html lang="en">
           <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>Ela Admin - HTML5 Admin Template</title>
                <meta name="description" content="Ela Admin - HTML5 Admin Template">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
           </head>
                <center class="alert alert-danger">Tài khoản hoặc mặt khẩu không tồn tại</center>
                <body style="background-color:#f0f5f5;">

                <div class="sufee-login d-flex align-content-center flex-wrap">
                    <div class="container">
                        <div style="text-align: center;">
                             <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" onclick="goBack();">Quay về trang đăng nhập</button>
                        </div>
                    </div>
                </div>
        
                <script src="../assets/js/main.js"></script>
                <script src="../assets/js/myfunction.js"></script>
        
           </body>
           </html>';
        }
    } 
}
