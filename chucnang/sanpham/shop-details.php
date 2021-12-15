<?php
$id_sp=$_GET["id_sp"];
$sqldm="SELECT * FROM danhmucsp";
$querydm=mysqli_query($conn,$sqldm);
$sqlcc = "SELECT * FROM nhacungcap ";
$querycc = mysqli_query($conn, $sqlcc);
$sql="SELECT * FROM sanpham WHERE id_sp=$id_sp"; 
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
?>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/banner/banner5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2><?php echo $row['ten_sp']; ?></h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Trang chủ</a>
                            <a href="index.php?page_layout=shop-grid">Shop</a>
                            <span><?php echo $row['ten_sp']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="../adminpage/pictures/<?php echo $row['anh_sp']?>" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="../adminpage/pictures/<?php echo $row['anh_sp']?>"
                                src="../adminpage/pictures/<?php echo $row['anh_sp']?>" alt="">
                            <img data-imgbigurl="img/product/details/elden-ring-41.jpg"
                                src="img/product/details/elden-ring-41.jpg" alt="">
                            <img data-imgbigurl="img/product/details/elden-ring-42.jpg"
                                src="img/product/details/elden-ring-42.jpg" alt="">
                            <img data-imgbigurl="img/product/details/elden-ring-43.jpg"
                                src="img/product/details/elden-ring-43.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3><?php echo $row['ten_sp']; ?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div ><del><?php  echo $row['don_gia']; ?></del></div>
                        <div class="product__details__price"><?php  echo $row['don_gia']; ?></div>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="chucnang/giohang/themhang.php?id_sp=<?php echo $row['id_sp']?>" class="primary-btn">Thêm vào giỏ hàng</a>
                        <ul>
                            <li><b>Availability</b> <span><?php  echo $row['tinh_trang']; ?></span></li>
                            <li><b>Thể loại</b> <span>
                                <?php   
                                //So sánh id_dm của sản phẩm và id_danhmuc của danhmucsp
                                while ($rowDm = mysqli_fetch_array($querydm)){
                                if($row['id_danhmuc']==$rowDm['id_dm_sp']){
                                    echo $rowDm['ten_dm_sp'];
                                }
                            }?></span></li>
                            <li><b>Hệ máy</b> <span><?php echo $row['he_may'];?> </span></li>
                            <li><b>Nhà xuất bản</b> <span>
                                <?php   
                                while ($rowcc = mysqli_fetch_array($querycc)){
                                if($row['id_ncc']==$rowcc['id_ncc']){
                                    echo $rowcc['ten_ncc'];
                                }
                            }?> </span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
            
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Thông tin chi tiết</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Đánh giá<span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                           
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                        elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                        porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                        nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Sản phẩm tương tự</h2>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mix Action FPS">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/product/call-of-duty-vanguard-ps5.jpg">
                            <ul class="featured__item__pic__hover">
                                <!-- <li><a href="shop-grid.php"><i class="fa fa-heart"></i></a></li> -->
                                <li><a href="shop-grid.php"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="shoping-cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="shop-grid.php">Call of Duty: Vanguard - EU</a></h6>
                            <h5>1,780,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Adventure Action">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/product/marvels-guardians-of-the-galaxy-ps5.jpg">
                            <ul class="featured__item__pic__hover">
                                <!-- <li><a href="shop-grid.php"><i class="fa fa-heart"></i></a></li> -->
                                <li><a href="shop-grid.php"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="shoping-cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="shop-grid.php">Marvel's Guardians of the Galaxy - US</a></h6>
                            <h5>1,630,000₫</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Action FPS">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/product/battlefield-2042-ps5.jpg">
                            <ul class="featured__item__pic__hover">
                                <!-- <li><a href="shop-grid.php"><i class="fa fa-heart"></i></a></li> -->
                                <li><a href="shop-grid.php"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="shoping-cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="shop-grid.php">Battlefield 2042 - US</a></h6>
                            <h5>CALL-1900 5526</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix Adventure Action RPG">
                <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg" data-setbg="img/product/tales-of-arise-ps5.jpg">
                        <div class="product__discount__percent">-20%</div>
                                <ul class="product__item__pic__hover">
                                <!-- <li><a href="shop-grid.php"><i class="fa fa-heart"></i></a></li> -->
                                <li><a href="shop-grid.php"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="shoping-cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                                <h5><a href="shop-details.php">Tales of Arise - US</a></h5>
                                <div class="product__item__price">1,280,000₫<span>1,580,000₫</span></div>
                            </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- Related Product Section End -->
