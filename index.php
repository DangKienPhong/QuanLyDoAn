<?php
 ob_start();
 session_start();
 include 'ketnoisql/ketnoi.php';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <?php include "layout/headpage.php"; ?>
</head>

<body>
    <!-- Menu -->
    <?php include "layout/menupage.php"; ?>
    <!-- Menu -->

<!--    Master Page-->

    <?php
    if(isset($_GET['page_layout'])){
        
    switch ($_GET['page_layout']) {
        case 'shop-grid':
            include_once './chucnang/sanpham/shop-grid.php';
            break;
        case 'shop-details':
            include_once './chucnang/sanpham/shop-details.php';
            break;
        case 'shop-gridcategories':
            include './chucnang/sanpham/shop-gridcategories.php';
            break;
        case 'shoping-cart':
            include_once './chucnang/giohang/shoping-cart.php';
            break;
        case 'checkout':
            include_once './chucnang/giohang/checkout.php';
            break;
        case 'blog':
            include_once './chucnang/blog/blog.php';
            break;
        case 'blog-details':
            include_once './chucnang/blog/blog-details.php';
            break;
        case 'login':
            include_once './chucnang/dangnhap/login.php';
            break;
        case 'register':
            include_once './chucnang/dangnhap/register.php';
            break;
        case 'contact':
            include_once './chucnang/lienhe/contact.php';
            break;
        case 'danhsachtimkiem':
            include_once './chucnang/timkiem/danhsachtimkiem.php';
        }
    } else{
            include_once './index-content.php';
        }
    ?>

    <!-- Banner Begin -->
    <!-- <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Banner End -->
   
   
    

    <!-- Footer Section Begin -->
   <?php include"layout/footerpage.php"; ?>



</body>

</html>