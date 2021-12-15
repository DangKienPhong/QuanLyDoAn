<?php
$id_sp=$_GET["id_sp"];
$sqldm="SELECT * FROM danhmucsp";
$querydm=mysqli_query($conn,$sqldm);
$sqlcc = "SELECT * FROM nhacungcap ";
$querycc = mysqli_query($conn, $sqlcc);
$sql="SELECT * FROM sanpham WHERE id_sp=$id_sp";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);

?>