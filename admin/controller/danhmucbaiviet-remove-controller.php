<?php
session_start();
if($_SESSION['user_name']=='long'&& $_SESSION['mat_khau']="39692159"){
    $id_dm_sp=$_GET["id_dm_sp"];
    include_once "../ketnoisql/ketnoi.php";
   
    $sql = "DELETE FROM danhmucsp WHERE id_dm_sp = '$id_dm_sp'";
    $query = mysqli_query($conn,$sql);
    header('location:../quantri.php?page_layout=quanlydanhmucsanpham');
}
else{
    header('location:../index.php');
}


?>
