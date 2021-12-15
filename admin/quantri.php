<?php
ob_start();
session_start();
include_once "ketnoisql/ketnoi.php";

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
   <?php include "layout/headerpage.php";?>

</head>

<body>
    <!-- Left Panel -->
    <?php include "layout/headerpannel.php";?>
   
        <!-- Header-->

        <?php
        if(isset($_GET["page_layout"])){
            switch ($_GET["page_layout"]) {
                case "quanlynguoidung": include_once "quanlynguoidung.php";
                break;
                case "quanlynguoidungadd":include_once  "quanlynguoidungadd.php";
                break;
                case "quanlynguoidungedit": include_once "quanlynguoidungedit.php";
                break;
                case "quanlynguoidungchitiet": include_once  "quanlynguoidungchitiet.php";
                break;
                case "quanlysanpham": include_once  "quanly-sanpham.php";
                break;
                case "quanlysanphamadd":include_once  "quanly-sanpham-add.php";
                break;
                case "quanlysanphamedit":include_once  "quanly-sanpham-edit.php";
                break;
                case "quanlysanphamchitiet":include_once  "quanly-sanpham-chitiet.php";
                break;
                case "quanlydanhmucsanpham":include_once "quanlydanhmucsanpham.php";
                break;
                case "quanlydanhmucsanphamadd":include_once  "quanlydanhmucadd.php";
                break;
                case "quanlydanhmucsanphamedit": include_once  "quanlydanhmucedit.php";
                break;
                case "quanlydanhmucsanphamchitiet": include_once  "quanlydanhmucchitiet.php";
                break;
                case "quanlybaiviet": include_once  "quanly-baiviet.php";
                break;
                case "quanlybaivietadd":include_once  "quanly-baiviet-add.php";
                break;
                case "quanlybaivietedit":include_once  "quanly-baiviet-edit.php";
                break;
                case "quanlybaivietchitiet": include_once  "quanly-baiviet-chitiet.php";
                break;
                case "quanlydonhang": include_once  "quanly-donhang.php";
                break;
                case "quanlydonhangchitiet": include_once  "quanly-donhang-chitiet.php";
                break;
            }
        }
        else{
            include_once  "gioithieu.php";
        }


        
         ?>

        <?php include "layout/footerpage.php";?>


</body>

</html>