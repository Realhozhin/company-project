<?php
include_once "../../config.php";
if(isset($_SESSION['adminn'])) {
    header('location: ../../login.php');
}
$title=$_POST['title'];
$explanation=$_POST['explanation'];
$link=$_POST['link'];
$image=$_FILES['image'];
$image_name=time().$image['name'];
$directory="../images/slider/".$image_name;
move_uploaded_file($image['tmp_name'],$directory);
insert_slider($title,$explanation,$link,$image_name);
header("Location: ../../create_slider.php");
