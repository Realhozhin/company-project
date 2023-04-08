<?php

session_start();
include_once "../../config.php";
if(!isset($_SESSION['adminn'])){
    header('location: ../../login.php');
}
$id=($_POST['id']);
$item=select_social_by_id($id);
delete_social($id);
header('location: show_social.php');