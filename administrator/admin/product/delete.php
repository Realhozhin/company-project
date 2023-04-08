<?php

session_start();
include_once "../../config.php";
if(!isset($_SESSION['adminn'])){
    header('location: ../../login.php');
}
$id=($_POST['id']);
$item=select_product_by_id($id);
$image=$item['image'];
var_dump($image);
unlink('../images/product/'.$image);
delete_product($id);
header('location: ../show_product.php');
