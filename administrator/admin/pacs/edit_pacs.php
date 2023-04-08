<?php
session_start();
include_once "../../config.php";
if(!isset($_SESSION['adminn'])){
    header('location: ../../login.php');
}
$description=$_POST['description'];
$address=$_POST['address'];
$id=$_POST['id'];
$image=$_FILES['image'];
$image_name=select_by_id_ttpacs($image,$id);
update_ttpacs($description,$address,$image_name,$id);
header('location: ../show_pac.php');