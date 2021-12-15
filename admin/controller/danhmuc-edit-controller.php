
<?php
ob_start();
include_once "ketnoisql/ketnoi.php";
$id_dm_sp=$_GET["id_dm_sp"];
$sql="SELECT * FROM danhmucsp WHERE id_dm_sp=$id_dm_sp";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
if(isset($_POST['submit'])){
    $ten_dm_sp=$_POST['ten_dm_sp'];
    if(isset($ten_dm_sp)){
        $sql="UPDATE danhmucsp SET ten_dm_sp = '$ten_dm_sp' WHERE id_dm_sp=$id_dm_sp";
        $query=mysqli_query($conn, $sql);
        header("location:quantri.php?page_layout=quanlydanhmucsanpham");
    }
    
}

?>