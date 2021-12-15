
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/banner/banner5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Giỏ Hàng</h2>
                        <div class="breadcrumb__option">
                        <a href="./index.php">Trang chủ</a>
                            <span>Giỏ Hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <?php
        if(isset($_SESSION['giohang'])){
            if(isset($_POST['sl'])){
                foreach($_POST['sl'] as $id_sp=>$sl){
                    if($sl==0){
                        unset($_SESSION['giohang'][$id_sp]);
                    }
                    else if($sl>0){
                        $_SESSION['giohang'][$id_sp]=$sl;
                    }
                }
            }
            $arrId=array();
            foreach($_SESSION['giohang'] as $id_sp=>$so_luong){
                $arrId[]=$id_sp;
            }
            $strId=implode(',',$arrId);
            $sql="SELECT * FROM sanpham WHERE id_sp IN($strId) ORDER BY id_sp DESC";
            $query = mysqli_query($conn,$sql);
        ?>
           <form method="post" id="giohang">
        <div class="container">
     
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                       
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng cộng</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <?php $totalPriceAll=0;
                            while($row = mysqli_fetch_array($query)) {
                                    $totalPrice=$row['don_gia']*$_SESSION['giohang'][$row['id_sp']];
                                    $totalPriceAll=$totalPriceAll+ $totalPrice;
                                                                ?>
                            <tbody>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="../adminpage/pictures/<?php echo $row['anh_sp']?>" alt="">
                                        <h5><?php echo $row['ten_sp']?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                    <?php echo $row['don_gia']?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" name="sl[<?php echo $row['id_sp']?>]" value="<?php echo $_SESSION['giohang'][$row['id_sp']];?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                    <?php echo $totalPrice?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                    <a href="chucnang/giohang/xoahang.php?id_sp=<?php echo $row['id_sp']?>" class="icon_close">
                                    </td>
                                </tr>
                            </tbody>
                           
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="shop-grid.php" class="primary-btn cart-btn">Tiếp tục mua hàng</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right" onclick="document.getElementById('giohang').submit();"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Mã ưu đãi</h5>
                            <form action="#">
                                <input type="text" placeholder="Nhập mã ưu đãi">
                                <button type="submit" class="site-btn">Áp dụng</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                   
                        <h5>Tổng cộng giỏ hàng</h5>
                        <ul>
                            <li>Tổng tiền tạm tính <span><?php echo $totalPriceAll;?></span></li>
                            <li>Tổng tiền <span><?php echo $totalPriceAll;?></span></li>
                        </ul>
                        <a href="checkout.php" class="primary-btn">Thanh toán</a>
                    </div>
                </div>
            </div>
            <?php
                             }
                            ?>
        </div>
        <?php
        }
        else{
                echo "Khong co don hang";
        }
        ?>
        </form>
      
    </section>
    <!-- Shoping Cart Section End -->
