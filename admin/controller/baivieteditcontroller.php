<?php

$bnt_XuLy = $_POST["bnt_XuLy"];
switch ($bnt_XuLy) {
    case "reset":
        header("Location: quanly-baiviet-edit.php");
        die;
        break;
    case "submit":

        $txt_tieude = $_POST['txt_tieude'];
        $txt_tacgia = $_POST['txt_tacgia'];
        $txt_chuyenmuc = $_POST['txt_chuyenmuc'];
        $txt_the = $_POST['txt_the'];
        $txt_ngaydang = $_POST['txt_ngaydang'];
        $txt_noidung = $_POST['txt_noidung'];


        

        echo "Bạn đã sửa bài viết với các thông tin sau:  <br>";
        echo "Tên tiêu đề: ".$txt_tieude. "<br>";
        echo "Tên tác giả: ".$txt_tacgia. "<br>";
        echo "Chuyên mục: ".$txt_chuyenmuc. "<br>";
        echo "Thẻ: ".$txt_the."<br>";
        echo "Ngày đăng: ".$txt_ngaydang."<br>";
        echo "Nội dung: ".$txt_noidung."<br>";

        die;
        break;
}
?>