<?php
if (!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION["user_name"])) {
    unset($_SESSION);
    session_destroy();
    header("Location: ../page-login.php");

}
?>

