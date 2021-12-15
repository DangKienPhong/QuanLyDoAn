
<?php
$id_dm_sp=$_GET["id_dm_sp"];
$sqldm="SELECT * FROM danhmucsp WHERE id_dm_sp=$id_dm_sp";
$querydm=mysqli_query($conn,$sqldm); 
$rowdm=mysqli_fetch_array($querydm);

//xét và nhận biến $_GET['page']
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page=1;

}
$rowsPerPage=6;
$perRow=$page*$rowsPerPage-$rowsPerPage;

$sqlsp="SELECT * FROM sanpham WHERE id_danhmuc=$id_dm_sp ORDER BY id_sp DESC LIMIT $perRow, $rowsPerPage"; 
$querysp=mysqli_query($conn,$sqlsp);

//tổng số bản ghi
$totalRows=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM sanpham WHERE id_danhmuc=$id_dm_sp"));

//tổng số trang (Nếu không chia hết thì làm tròn lên bằng ceil)
$totalPages=ceil($totalRows/$rowsPerPage);

//Xây dựng phân trang
$listpage="";
for ($i=1; $i <= $totalPages ; $i++) { 
    if($page == $i){
       $listpage.='<a class="active" href="index.php?page_layout=shop-gridcategories&id_dm_sp='.$id_dm_sp.'&page='.$i.'">'.$i.'</a>'; 
    }
    else{
        $listpage.='<a href="index.php?page_layout=shop-gridcategories&id_dm_sp='.$id_dm_sp.'&page='.$i.'">'.$i.'</a>';
    }
}
?>
    <section class="breadcrumb-section set-bg" data-setbg="img/banner/banner5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                    <h2><?php echo $rowdm['ten_dm_sp']; ?></h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Trang chủ</a>
                            <a href="index.php?page_layout=shop-grid">Shop</a>
                            <span><?php echo $rowdm['ten_dm_sp']; ?></span>
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
                    while ($rowsp = mysqli_fetch_array($querysp)){
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                        <div class="featured__item__pic set-bg" data-setbg="../adminpage/pictures/<?php echo $rowsp['anh_sp']?>">
                                <ul class="product__item__pic__hover">
                                    <li><a href="shop-details.php"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="shop-details.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                            <a href="index.php?page_layout=shop-details&id_sp=<?php echo $rowsp['id_sp']; ?>">
                            <h6><?php echo $rowsp['ten_sp']; ?></h6>
                            <h5><?php  echo $rowsp['don_gia']; ?></h5>
                            </a>
                        </div>
                        </div>
                    </div>
                    <?php }?>
                   
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
