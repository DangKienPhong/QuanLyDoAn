
<?php

ob_start();
include_once "ketnoisql/ketnoi.php";
$sqldm = "SELECT * FROM danhmucsp ";
$query = mysqli_query($conn, $sqldm);
$sqlcc = "SELECT * FROM nhacungcap ";
$querycc = mysqli_query($conn, $sqlcc);
if(isset($_POST['submit'])){
    $ten_sp=$_POST['ten_sp'];
    $tinh_trang = $_POST['tinh_trang'];
    $he_may= $_POST['he_may'];
    $don_gia = $_POST['don_gia'];
    if($_FILES['anh_sp']['name']==''){
        $error_anh_sp = '<span style="color:red;">(*)</span>';
    }
    else{
        $anh_sp = $_FILES['anh_sp']['name'];
        $tmp_anh_sp = $_FILES['anh_sp']['tmp_name'];
    }
    if($_POST['id_dm_sp']=='unselect'&&$_POST['id_ncc']=='unselect'){
        $error_anh_sp = '<span style="color:red;">(*)</span>';
    }
    else{
        $id_dm_sp=$_POST['id_dm_sp'];
        $id_ncc=$_POST['id_ncc'];
    }
    if(isset($ten_sp)&&isset($tinh_trang)&&isset($he_may)&&isset($don_gia)&&isset($anh_sp)&&isset($id_dm_sp)&&isset($id_ncc)){
      
        move_uploaded_file($tmp_anh_sp,"pictures/".$anh_sp);
        
        $sql="INSERT INTO sanpham(id_danhmuc,id_ncc,ten_sp,tinh_trang,he_may,don_gia,anh_sp)
         VALUES('$id_dm_sp','$id_ncc','$ten_sp','$tinh_trang','$he_may','$don_gia','$anh_sp')";
        $query = mysqli_query($conn, $sql);
        header("location:quantri.php?page_layout=quanlysanpham");
        
    }
}

?>