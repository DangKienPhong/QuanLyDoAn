<?php
session_start();
if($_SESSION['user_name']=='long'&& $_SESSION['mat_khau']="39692159"){
    $id_user=$_GET["id_user"];
    include_once "../ketnoisql/ketnoi.php";
   
    $sql = "DELETE FROM users WHERE id_user = '$id_user'";
    $query = mysqli_query($conn,$sql);
    header('location:../quantri.php?page_layout=quanlynguoidung');
}
else{
    header('location:../index.php');
}


?>
