<?php
session_start();
if($_SESSION['user_name']=='long'&& $_SESSION['mat_khau']="39692159"){
    $id_sp=$_GET["id_sp"];
    include_once "../ketnoisql/ketnoi.php";
   
    $sql = "DELETE FROM sanpham WHERE id_sp = '$id_sp'";
    $query = mysqli_query($conn,$sql);
    header('location:../quantri.php?page_layout=quanlysanpham');
}
else{
    header('location:../index.php');
}


?>
