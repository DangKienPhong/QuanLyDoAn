
<?php
$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbName="nggame";
$conn=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if($conn){
    $setLang=mysqli_query($conn,"SET NAMES 'utf8'");
}
else{
    die("Could not connect to the database!".mysqli_connect_error());
}
?>