<?php
session_start();
if($_SESSION['Aid']==""){
    header('location:../Guest/Login.php');
}
?>