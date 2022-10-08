<?php 
$con = mysqli_connect("localhost","root","","task") or die(mysqli_error($con));
session_start();
if(!isset($_SESSION['name'])){
    header("Location:../index.php");
}
include '../include/cheader.php'?>

<h1 style="margin-left:30px"><?php echo "Hello ".$_SESSION['name']."!"; ?></h1>