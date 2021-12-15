<?php
if (isset($_SESSION['giohang'])) {
    $arrId = array();
    foreach ($_SESSION['giohang'] as $id_sp => $so_luong) {
        $arrId[] = $id_sp;
    }
    $strId = implode(',', $arrId);
    $sql = "SELECT * FROM sanpham WHERE id_sp IN($strId) ORDER BY id_sp DESC";
    $query = mysqli_query($conn, $sql);
}
?>
<?php
function tongtien($query){
    $totalPriceAll1 = 0;
    while ($row1 = mysqli_fetch_array($query)) {
    $totalPrice1 = $row1['don_gia'] * $_SESSION['giohang'][$row1['id_sp']];
    $totalPriceAll1 = $totalPriceAll1 + $totalPrice1;
    }
return $totalPriceAll1;
}

?>
<?php
if (isset($_POST['submit'])) {
    //$id_sp = $_POST['id_sp'];
    $ten_user = $_POST['ten_user'];
    $dia_chi = $_POST['dia_chi'];
    $so_dien_thoai = $_POST['sdt'];
    $email = $_POST['email'];
    $ghi_chu = $_POST['ghichu'];
    $rad_phuongthuc = $_POST['rad_phuongthuc'];
    $trang_thai = "Nhận đơn hàng";
    $id_user = $_SESSION["user"]['id_user'];
    // if(isset($_POST['id_user'])){
    //     $id_user = $_POST['id_user'];
    // } else {
        // $sql_tinhsoluonguser = "SELECT COUNT(id_user) FROM `users`;";
        // $query_tinhsoluonguser = mysqli_query($conn, $sql_tinhsoluonguser);
        // $id_user = $query_tinhsoluonguser + 1;
    // }
    $don_gia =tongtien($query);
    
    
    //Tiến hàng thêm Đơn hàng
    if (isset($id_user) && isset($ten_user) && isset($dia_chi) && isset($so_dien_thoai) && isset($email) && isset($don_gia)) {
        $sql = "INSERT INTO `donhang`(`id_user`, `ten_user`, `dia_chi`, `so_dien_thoai`, `email`, `thanh_tien`,`ghi_chu`, `phuong_thuc_thanh_toan`,`trang_thai`)
        VALUES('$id_user','$ten_user','$dia_chi','$so_dien_thoai','$email','$don_gia','$ghi_chu','$rad_phuongthuc','$trang_thai')";
        $query_themdon = mysqli_query($conn, $sql);
        if ($query_themdon) {
            echo "Thêm Đơn hàng thành công <br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        //Thêm chi tiết đơn hàng
        if($query_themdon){
            $id_don_hang = mysqli_insert_id($conn);
            foreach ($_SESSION['giohang'] as $id_sp => $so_luong) {
                $sql_dongia = "SELECT * FROM sanpham WHERE id_sp = $id_sp";
                $query_dongia = mysqli_query($conn, $sql_dongia);
                $result = mysqli_fetch_assoc($query_dongia);
                //echo $result["don_gia"];
                $dongia_sanpham = $result["don_gia"];
                $sql_chitiet = "INSERT INTO `chitietdonhang`(`id_don_hang`, `id_sp`, `so_luong`, `don_gia`)
                VALUES('$id_don_hang','$id_sp','$so_luong','$dongia_sanpham')"; 
                $query_chitiet = mysqli_query($conn, $sql_chitiet);
            if ($query_chitiet) {
                            echo "Thêm chi tiết đơn thành công";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
            }
            unset($_SESSION['giohang']);
            header("Location: ././index.php");
        }


    }
    
}

?>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/banner/banner5.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Thanh Toán</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.php">Trang chủ</a>
                        <span>Thanh toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <form method="POST" enctype="multipart/form-data" class="form-horizontal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                    </h6> -->
                </div>
            </div>
            <div class="checkout__form">
                <h4>Thông Tin Đơn Hàng</h4>
                <form action="#">
                   
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Họ Tên<span>*</span></p>
                                        <input type="text" name="ten_user" required placeholder="Nhập tên của bạn"  value="<?php echo $_SESSION["user"]['ten_user']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Địa chỉ giao hàng<span>*</span></p>
                                <input type="text" name="dia_chi" placeholder="Nhập địa chỉ cần giao" class="checkout__input__add" required>
                            </div>
                            <!-- <div class="checkout__input">
                                <p>Tỉnh / Thành phố<span>*</span></p>
                                <input type="text">
                            </div> -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số điện thoại <span>*</span></p>
                                        <input type="text" name="sdt" placeholder="Nhập số điện thoại liên lạc" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="email" required placeholder="Nhập email"  value="<?php echo $_SESSION["user"]['email']; ?>">
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Ship to a different address?
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div> -->
                            <div class="checkout__input">
                                <p>Ghi chú<span>*</span></p>
                                <textarea rows="9" cols="100" name="ghichu" placeholder="Thêm ghi chú cho đơn hàng của bạn." required></textarea>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Đơn hàng của bạn</h4>
                                <div class="checkout__order__products">Sản phẩm<span>Tổng tiền</span></div>
                                <?php
                                $totalPriceAll = 0;
                                while ($row = mysqli_fetch_array($query)) {
                                    $totalPrice = $row['don_gia'] * $_SESSION['giohang'][$row['id_sp']];
                                    $totalPriceAll = $totalPriceAll + $totalPrice;
                                ?>
                                    <ul>

                                        <li name="id_sp"><?php echo $row['ten_sp'] ?> x<?php echo $_SESSION['giohang'][$row['id_sp']]; ?><span>Giá <?php echo $row['don_gia'] ?> <?php echo $totalPrice ?> </span></li>
                                        
                                    </ul>
                                <?php
                                }
                                ?>
                                <div class="checkout__order__subtotal">Tổng tiền tạm tính <span><?php echo $totalPriceAll ?></span></div>
                                <div class="checkout__order__total">Tổng tiền <span><?php echo $totalPriceAll ?></span></div>

                                <!-- <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Create an account?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</p> -->
                                <h4>Phương thức thanh toán</h4>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Thu tiền khi giao hàng
                                        <input type="radio" id="payment" name="rad_phuongthuc" value="COD" required>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Chuyển khoản ngân hàng
                                        <input type="radio" id="paypal" name="rad_phuongthuc" value="Banking">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" name="submit" class="site-btn">Xác nhận đơn hàng</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </form>
</section>
<!-- Checkout Section End -->