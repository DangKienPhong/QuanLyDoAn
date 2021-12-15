
<?php
ob_start();
include_once "ketnoisql/ketnoi.php";
$id_user=$_GET["id_user"];
$sql="SELECT * FROM users WHERE id_user=$id_user";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);


?>