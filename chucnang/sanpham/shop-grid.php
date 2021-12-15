<?php
//xét và nhận biến $_GET['page']
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page=1;

}
$rowsPerPage=6;
$perRow=$page*$rowsPerPage-$rowsPerPage;
$sqlsp="SELECT * FROM sanpham LIMIT $perRow, $rowsPerPage"; 
$querysp=mysqli_query($conn,$sqlsp);

//tổng số bản ghi
$totalRows=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM sanpham"));

//tổng số trang (Nếu không chia hết thì làm tròn lên bằng ceil)
$totalPages=ceil($totalRows/$rowsPerPage);

//Xây dựng phân trang
$listpage="";
for ($i=1; $i <= $totalPages ; $i++) { 
    if($page == $i){
       $listpage.='<a class="active" href="index.php?page_layout=shop-grid&page='.$i.'">'.$i.'</a>'; 
    }
    else{
        $listpage.='<a href="index.php?page_layout=shop-grid&page='.$i.'">'.$i.'</a>';
    }
}
?>
    <section class="breadcrumb-section set-bg" data-setbg="img/banner/banner5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>NG Game Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Trang chủ</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <!-- shopcategories-->
                <?php include_once './chucnang/sanpham/shopcategories.php'; ?>
                <!-- shopcategories -->
            </div>
            <div class="col-lg-9 col-md-7">
               
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                                <span>Sort By</span>
                                <select>
                                    <option value="0">Default</option>
                                    <option value="0">Default</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                 
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div> -->
                    </div>
                </div>
                <div class="row">
                   <?php
                    while ($row = mysqli_fetch_array($querysp)){
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                        <div class="featured__item__pic set-bg" data-setbg="../adminpage/pictures/<?php echo $row['anh_sp']?>">
                                <ul class="product__item__pic__hover">
                                    <li><a href="shop-details.php"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="shop-details.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                            <h6><a href="index.php?page_layout=shop-details&id_sp=<?php echo $row['id_sp']; ?>"><?php echo $row['ten_sp']; ?></a></h6>
                            <h5><?php  echo $row['don_gia']; ?></h5>
                        </div>
                        </div>
                    </div>
                    <?php }?>
                    <!-- <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/product/marvels-guardians-of-the-galaxy-ps5.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="shop-details.php"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="shop-details.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                            <h6><a href="shop-details.php">Marvel's Guardians of the Galaxy - US</a></h6>
                            <h5>1,630,000₫</h5>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/product/battlefield-2042-ps5.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="shop-details.php"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="shop-details.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                            <h6><a href="shop-details.php">Battlefield 2042 - US</a></h6>
                            <h5>1,330,000₫</h5>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg" data-setbg="img/product/tales-of-arise-ps5.jpg">
                                <div class="product__discount__percent">-20%</div>
                                <ul class="product__item__pic__hover">
                                    <li><a href="shop-details.php"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="shop-details.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__discount__item__text">
                                <h5><a href="shop-details.php">Tales of Arise - US</a></h5>
                                <div class="product__item__price">1,280,000₫<span>1,580,000₫</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__discount__item">
                        <div class="product__discount__item__pic set-bg" data-setbg="img/product/elden-ring-ps5.jpg">
                                <div class="product__discount__percent">-20%</div>
                                <ul class="product__item__pic__hover">

                                    <li><a href="shop-details.php"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="shop-details.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__discount__item__text">
                                <h5><a href="shop-details.php">Elden Ring</a></h5>
                                <div class="product__item__price">1,280,000₫<span>1,580,000₫</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/product/code-vein-ps4.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="shop-details.php"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="shop-details.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                            <h6><a href="shop-grid.php">Code Vein</a></h6>
                            <h5>730,000₫</h5>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/product/crysis-remastered-trilogy-ps4.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="shop-details.php"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="shop-details.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                            <h6><a href="shop-grid.php">Crysis Remastered Trilogy</a></h6>
                            <h5>1,330,000₫</h5>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/product/grand-theft-auto-the-trilogy-the-definitive-edition-ps4.jpg">
                                <ul class="product__item__pic__hover">
                                    <li><a href="shop-details.php"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="shop-details.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                            <h6><a href="shop-grid.php">Grand Theft Auto: The Trilogy [The Definitive Edition] </a></h6>
                            <h5>1,330,000₫</h5>
                        </div>
                        </div>
                    </div>
                   -->
                </div>
                <div class="product__pagination">
                    <?php
                        //module thanh số trang 1 2 3
                        //include_once './chucnang/thanhsotrang/thanhsotrang-shop-grid.php';
                        echo $listpage;
                        
                    ?>
                </div>
                
            </div>
        </div>
        </div>
    </section>
    <!-- Product Section End -->
