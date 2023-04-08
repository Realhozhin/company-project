<?php

session_start();
include_once "../../config.php";
if(!isset($_SESSION['adminn'])){
    header('location: ../../login.php');
}
$id=($_POST['id']);
$item=select_ttpacs_by_id($id);
$image=$item['image'];
var_dump($image);
unlink('../images/ttpacs/'.$image);
delete_ttpacs($id);
header('location: ../show_pac.php');
