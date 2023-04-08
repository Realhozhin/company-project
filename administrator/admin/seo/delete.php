<?php
session_start();
include_once "../../config.php";
if(!isset($_SESSION['adminn'])){
    header('location: ../../login.php');
}
$id=$_POST['id'];
$item=select_by_idseo($id);
$image=$item['image'];
unlink('../images/seo/'.$image);
delete_seo($id);
header('location: ../show_seo.php');
