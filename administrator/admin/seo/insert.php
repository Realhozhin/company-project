<?php
include_once "../../config.php";
session_start();
if (!isset($_SESSION['adminn'])) {
    header('location: ../../../index.php');
}
$title=$_POST['title'];
$author=$_POST['author'];
$keywords=$_POST['keywords'];
$description=$_POST['description'];
$image=$_FILES['image'];
$conn=conncet_to_db();
$image_name=upload_file($image);
insert_seo($title,$author,$keywords,$description,$image_name);
header('location: ../admin.php');


