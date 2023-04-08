<?php
session_start();
include_once "../../config.php";
if(!isset($_SESSION['adminn'])){
    header('location: ../../login.php');
}
$title=$_POST['title'];
$explanation=$_POST['explanation'];
$link=$_POST['link'];
$id=$_POST['id'];
$image=$_FILES['image'];
$image_name=select_by_id_slider($image,$id);
update_slider($title,$explanation,$link,$image_name,$id);
header('location: ../show_slider.php');

