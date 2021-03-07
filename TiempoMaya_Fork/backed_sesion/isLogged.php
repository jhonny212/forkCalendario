<?php 
session_start();
$user=$_SESSION['username'];
$rol=$_SESSION['rol'];

if($user==null || $rol ==null){
    header('location: index.php');
}

?>