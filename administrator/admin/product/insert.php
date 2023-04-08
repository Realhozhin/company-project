<?php

include_once "../../config.php";
if (isset($_SESSION['adminn'])) {
    header('location: ../../login.php');
}
$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image'];
$image_name = time() . $image['name'];
$directory = "../images/product/". $image_name;
move_uploaded_file($image['tmp_name'], $directory);
insert_product($title,$description,$image_name);
header('location: ../create_product.php');
