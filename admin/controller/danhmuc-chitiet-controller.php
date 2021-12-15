
<?php
ob_start();
include_once "ketnoisql/ketnoi.php";
$id_dm_sp=$_GET["id_dm_sp"];
$sql="SELECT * FROM danhmucsp WHERE id_dm_sp=$id_dm_sp";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);


?>