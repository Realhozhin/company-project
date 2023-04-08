<?php
session_start();
include_once "../../config.php";
if(!isset($_SESSION['adminn'])){
    header('location: ../../login.php');
}
$title=$_POST['title'];
$description=$_POST['description'];
$id=$_POST['id'];
$image=$_FILES['image'];
$image_name=select_by_id_product($image,$id);
update_product($title,$description,$image_name,$id);
header('location: ../show_product.php');
