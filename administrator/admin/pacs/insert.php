<?php

include_once "../../config.php";
if (isset($_SESSION['adminn'])) {
    header('location: ../../login.php');
}
$description=$_POST['description'];
$address=$_POST['address'];
$image=$_FILES['image'];
$image_name=time().$image['name'];
$directory="../images/ttpacs/". $image_name;
move_uploaded_file($image['tmp_name'], $directory);
insert_ttpacs($description,$image_name,$address);
header('location: ../create_pac.php');