<?php

//xét và nhận biến $_GET['page']
if(isset($_GET['page'])){
    $page = $_GET['page'];
}
else{
    $page=1;

}
$rowsPerPage=3;
$perRow=$page*$rowsPerPage-$rowsPerPage;


//Nhận từ khóa tìm kiếm 
if(isset($_POST['searchtext'])){
    $searchtext = $_POST['searchtext'];
}
else{
    $searchtext = $_GET['searchtext'];
}
//Loại bỏ khoảng trắng đầu và cuối từ khóa
$searchtextNew = trim($searchtext);
$arr_searchtextNew = explode(' ',$searchtextNew);
$searchtextNew = implode('%',$arr_searchtextNew);
$searchtextNew='%'.$searchtextNew.'%';

$sqltimkiem = "SELECT * FROM sanpham WHERE ten_sp LIKE ('$searchtextNew') ORDER BY id_sp LIMIT $perRow, $rowsPerPage";
$querytimkiem=mysqli_query($conn,$sqltimkiem);

//tổng số bản ghi
$totalRows=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM sanpham WHERE ten_sp LIKE ('$searchtextNew')"));

//tổng số trang (Nếu không chia hết thì làm tròn lên bằng ceil)
$totalPages=ceil($totalRows/$rowsPerPage);

//Xây dựng phân trang
$listpage="";
for ($i=1; $i <= $totalPages ; $i++) { 
    if($page == $i){
       $listpage.='<a class="active" href="index.php?page_layout=danhsachtimkiem&searchtext='.$searchtext.'&page='.$i.'">'.$i.'</a>'; 
    }
    else{
        $listpage.='<a href="index.php?page_layout=danhsachtimkiem&searchtext='.$searchtext.'&page='.$i.'">'.$i.'</a>';
    }
}
?>
    <section class="breadcrumb-section set-bg" data-setbg="img/banner/banner5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Kết quả tìm kiếm <span>"<?php echo $searchtext; ?>"</span> </h2>
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

                    </div>
                </div>
                <div class="row">
                   <?php
                    while ($row = mysqli_fetch_array($querytimkiem)){
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
