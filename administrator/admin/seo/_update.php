<?php
session_start();
include_once "../../config.php";
if(!isset($_SESSION['adminn'])){
    header('location: ../../login.php');
}
$title=$_POST['title'];
$author=$_POST['author'];
$keywords=$_POST['keywords'];
$description=$_POST['description'];
$id=$_POST['id'];
$image=$_FILES['image'];
$image_name=select_by_id_seo($image,$id);
update_seo($title,$author,$keywords,$description,$image_name,$id);
header('location: ../show_seo.php');