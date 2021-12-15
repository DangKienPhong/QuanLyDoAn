
<?php
ob_start();
include_once "ketnoisql/ketnoi.php";
$id_user=$_GET["id_user"];
$sql="SELECT * FROM users WHERE id_user=$id_user";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
if(isset($_POST['submit'])){
    $ten_user=$_POST['ten_user'];
    $so_dien_thoai=$_POST['so_dien_thoai'];
    $email=$_POST['email'];
    $dia_chi=$_POST['dia_chi'];
    if(isset($ten_user)&&isset($so_dien_thoai)&&isset($email)&&isset($dia_chi)){
        $sql="UPDATE users SET ten_user='$ten_user',so_dien_thoai='$so_dien_thoai',email='$email',dia_chi='$dia_chi' WHERE id_user=$id_user";
        $query=mysqli_query($conn, $sql);
        header("location:quantri.php?page_layout=quanlynguoidung");
    }
    
}

?>