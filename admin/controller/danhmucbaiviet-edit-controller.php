<?php

$btn_Xuly = $_POST["btn_Xuly"];
switch ($btn_Xuly) {
    case "reset":
        header("Location: quanly-danhmuc-add.php");
        die;
        break;
    case "submit":
        $txt_ma = $_POST['txt_Ma'];
        $txt_ten = $_POST['txt_Ten'];
        echo "Bạn đã sửa 1 danh mục bài viết với các thông tin sau:  <br>";
        echo "Mã danh mục: " . $txt_ma . "<br>";
        echo "Tên danh mục: " . $txt_ten . "<br>";
        die;
        break;
}
?>