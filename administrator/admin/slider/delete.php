<?php
session_start();
include_once "../../config.php";
if(!isset($_SESSION['adminn'])){
    header('location: ../../login.php');
}
$id=($_POST['id']);
$item=select_slider_by_id($id);
$image=$item['image'];
var_dump($image);
unlink('../images/slider/'.$image);
delete_slider($id);
header('location: ../show_slider.php');