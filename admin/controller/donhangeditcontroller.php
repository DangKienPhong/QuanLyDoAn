<?php

$bnt_XuLy = $_POST["bnt_XuLy"];
switch ($bnt_XuLy) {
    case "reset":
        header("Location: quanlydonhangedit.php");
        die;
        break;
    case "submit":
        $txt_ma = $_POST['txt_ma'];
        $txt_ten = $_POST['txt_ten'];
        $txt_ngaylap = $_POST['txt_ngaylap'];
        $txt_ngaygiao = $_POST['txt_ngaygiao'];
        $txt_noigiao = $_POST['txt_noigiao'];
        $rd_thanhtoan = $_POST['rd_thanhtoan'];
        $txt_tongtien = $_POST['txt_tongtien'];
        $txt_soluong=$_POST['txt_soluong'];
        $sel_sanpham = $_POST['sel_sanpham'];
        $sel_tinhtrang = $_POST['sel_tinhtrang'];

        

        echo "Bạn đã thêm 1 đơn hàng với các thông tin sau:  <br>";
        echo "Mã đơn hàng: ".$txt_ma. "<br>";
        echo "Tên tên đơn hàng: ".$txt_ten. "<br>";
        echo "Ngày nhập: ".$txt_ngaylap. "<br>";
        echo "Ngày giao: ".$txt_ngaygiao. "<br>";
        echo "Nơi giao: ".$txt_noigiao."<br>";
        if($rd_thanhtoan == "Tiền mặt"){
            echo "Bạn đã chọn: Tiền mặt <br>";
        }
        else{
            echo "Bạn đã chọn: Chuyển khoản <br>";
        }
        echo "Tình trạng: ".$sel_tinhtrang."<br>";
        echo "Tên sản phẩm: ".$sel_sanpham."<br>";
        echo "Số lượng: ".$txt_soluong."<br>";
        echo "Tổng tiền: ".$txt_tongtien."<br>";
        die;
        break;
}
?>