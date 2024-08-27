<?php
session_start();
if($_SESSION['fid']==""){
    header('location:../Guest/Login.php');
}
?>