
<?php
$id_sp=$_GET["id_sp"];
$sqldm="SELECT * FROM danhmucsp";
$querydm=mysqli_query($conn,$sqldm);
$sqlcc = "SELECT * FROM nhacungcap ";
$querycc = mysqli_query($conn, $sqlcc);
$sql="SELECT * FROM sanpham WHERE id_sp=$id_sp";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
if(isset($_POST['submit'])){
    $ten_sp=$_POST['ten_sp'];
    $tinh_trang = $_POST['tinh_trang'];
    $he_may= $_POST['he_may'];
    $don_gia = $_POST['don_gia'];
    $id_dm_sp = $_POST['id_dm_sp'];
    $id_ncc = $_POST['id_ncc'];
    if($_FILES['anh_sp']['name']==''){
        $anh_sp = $_POST['anh_sp'];
    }
    else{
        $anh_sp = $_FILES['anh_sp']['name'];
        $tmp_anh_sp = $_FILES['anh_sp']['tmp_name'];
    }
    if(isset($ten_sp)&&isset($tinh_trang)&&isset($he_may)&&isset($don_gia)){
        move_uploaded_file($tmp_anh_sp,'pictures/'.$anh_sp);
        $sql="UPDATE sanpham SET ten_sp = '$ten_sp',tinh_trang = '$tinh_trang',he_may='$he_may',don_gia='$don_gia',anh_sp='$anh_sp',id_danhmuc='$id_dm_sp',id_ncc='$id_ncc' WHERE id_sp=$id_sp";
        $query=mysqli_query($conn, $sql);
        header("location:quantri.php?page_layout=quanlysanpham");
    }
    
}

?>