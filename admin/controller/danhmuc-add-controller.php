
<?php
ob_start();
include_once "ketnoisql/ketnoi.php";


if(isset($_POST['submit'])){
    $ten_dm_sp=$_POST['ten_dm_sp'];
   
   
    if(isset($ten_dm_sp)){
    
        $sql="INSERT INTO danhmucsp (ten_dm_sp)VALUES('$ten_dm_sp')";
        $query = mysqli_query($conn, $sql);
        header("location:quantri.php?page_layout=quanlydanhmucsanpham");
        
    }
}

?>