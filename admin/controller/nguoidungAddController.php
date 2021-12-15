
<?php
ob_start();
include_once "ketnoisql/ketnoi.php";


if(isset($_POST['submit'])){
    $ten_user=$_POST['ten_user'];
    $mat_khau=md5($_POST['mat_khau']);
    $so_dien_thoai=$_POST['so_dien_thoai'];
    $email=$_POST['email'];
    $dia_chi=$_POST['dia_chi'];
    if(isset($ten_user)&&isset($mat_khau)&&isset($so_dien_thoai)&&isset($email)&&isset($dia_chi)){
    
        $sql="INSERT INTO users (ten_user,mat_khau,so_dien_thoai,email,dia_chi) VALUES ('$ten_user','$mat_khau','$so_dien_thoai','$email','$dia_chi')";
        $query = mysqli_query($conn, $sql);
        header("location:quantri.php?page_layout=quanlynguoidung");
        
    }
}

?>