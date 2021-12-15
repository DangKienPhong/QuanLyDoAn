<div id="preloder">
        <div class="loader"></div>
    </div>

 <!-- Humberger Begin -->
 <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo1.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>2</span></a></li>
            </ul>
            <!-- <div class="header__cart__price">item: <span>$150.00</span></div> -->
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                <a href="./index.php?page_layout=login"><i class="fa fa-user"></i>Đăng nhập</a>
                <a href="./index.php?page_layout=register"><i class="fa fa-user"></i>Đăng ký</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            
        
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> nggame@gmail.com</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <!-- <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <?php 
                            if(isset($_SESSION["user"])){
                             echo'<div class="header__top__right__auth">
                                <a href="#" ><i class="fa fa-user"></i>'.$_SESSION["user"]['email'].'</a>
                                
                            </div>
                            <div class="header__top__right__auth">
                                
                            <a href="././controller/logoutcontroller.php">- Logout</a>
                            </div>';
                            
                            }else{
                                echo'<div class="header__top__right__auth">
                                <a href="./index.php?page_layout=login" ><i class="fa fa-user"></i>Đăng nhập</a>
                                
                            </div>
                            <div class="header__top__right__auth">
                                
                                <a href="./index.php?page_layout=register">- Đăng ký</a>
                            </div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo1.png" alt="">Game</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Trang chủ</a></li>
                            <li><a href="./index.php?page_layout=shop-grid">Shop</a></li>
                            
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./index.php?page_layout=shop-details">Shop Details</a></li>
                                    <li><a href="./index.php?page_layout=shoping-cart">Shoping Cart</a></li>
                                    <li><a href="./index.php?page_layout=checkout">Check Out</a></li>
                                    <li><a href="./index.php?page_layout=blog-details">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./index.php?page_layout=blog">Blog</a></li>
                            <li><a href="./index.php?page_layout=contact">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="./index.php?page_layout=shoping-cart"><i class="fa fa-shopping-bag"></i> <span><?php if(isset($_SESSION['giohang'])){echo count($_SESSION['giohang']);}else{echo 0;}?></span></a></li>
                        </ul>
                        <!-- <div class="header__cart__price">item: <span>$150.00</span></div> -->
                    </div>
                </div>
                
            </div>
            <?php include 'chucnang/timkiem/timkiem.php';?>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>