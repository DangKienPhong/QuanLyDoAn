
<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">UI elements</li><!-- /.menu-title -->
                    <li  >
                    <a href="index.php"><i class="menu-icon fa fa-user"></i>Trang chủ</a>
                        
                    </li>
                    <li class="menu-item-has-children dropdown" >
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Quản lý người dùng</a>
                        <ul class="sub-menu children dropdown-menu">            
                        <li><i class="fa ti-angle-double-right"></i><a href="quantri.php?page_layout=quanlynguoidung">Hiển thị danh sách</a></li>
                            <li><i class="fa ti-plus"></i><a href="quantri.php?page_layout=quanlynguoidungadd">&nbsp;Thêm người dùng</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Quản lý danh mục</a>
                        <ul class="sub-menu children dropdown-menu">            
                        <li><i class="fa ti-angle-double-right"></i><a href="quantri.php?page_layout=quanlydanhmucsanpham">Hiển thị danh sách</a></li>
                            <li><i class="fa ti-plus"></i><a href="quantri.php?page_layout=quanlydanhmucsanphamadd">&nbsp;Thêm danh mục</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-archive"></i>Quản lý sản phẩm</a>
                        <ul class="sub-menu children dropdown-menu">            
                        <li><i class="fa ti-angle-double-right"></i><a href="quantri.php?page_layout=quanlysanpham">Hiển thị danh sách</a></li>
                            <li><i class="fa ti-plus"></i><a href="quantri.php?page_layout=quanlysanphamadd">&nbsp;Thêm sản phẩm</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-shopping-cart"></i>Quản lý đơn hàng</a>
                        <ul class="sub-menu children dropdown-menu">            
                        <li><i class="fa ti-angle-double-right"></i><a href="quantri.php?page_layout=quanlydonhang">Hiển thị danh sách</a></li>

                        </ul>
                    </li>
           
                    <li class="menu-item-has-children dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>Quản lý bài viết</a>
                        <ul class="sub-menu children dropdown-menu">            
                        <li><i class="fa ti-angle-double-right"></i><a href="quantri.php?page_layout=quanlybaivietadd">Hiển thị danh sách</a></li>
                            <li><i class="fa ti-plus"></i><a href="quanly-baiviet-add.php">&nbsp;Thêm bài viết</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon fa  fa-bars"></i>Danh mục bài viết</a>
                        <ul class="sub-menu children dropdown-menu">            
                        <li><i class="fa ti-angle-double-right"></i><a href="quantri.php?page_layout=quanlybaiviet">Hiển thị danh sách</a></li>
                            <li><i class="fa ti-plus"></i><a href="quanlydanhmucbaivietadd.php">&nbsp;Thêm danh mục bài viết</a></li>
                        </ul>
                    </li>


            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                                <span class="count bg-primary">4</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jonathan Smith</span>
                                        <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Jack Sanders</span>
                                        <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Cheryl Wheeler</span>
                                        <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                    </div>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                    <div class="message media-body">
                                        <span class="name float-left">Rachel Santos</span>
                                        <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
               
                 <?php
                 if(isset($_SESSION["user_name"])){
                          echo '
                        <a href="#" class="dropdown for-message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Xin chào, '.$_SESSION["user_name"].'
                        </a>';
                        echo ' <div class="user-menu dropdown-menu">
                            
                        <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                        <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>
                       <a class="nav-link" href="controller/logoutcontroller.php"><i class="fa fa-power-off"></i>Logout</a>
                      
                    </div>';
                    }
                    else{
                        echo'  <a href="page-login.php"><i class="menu-icon"></i>Đăng nhập </a>';
                    }
                    ?>

                       
                    </div>
                </div>
            </div>
        </header><!-- /header -->




               