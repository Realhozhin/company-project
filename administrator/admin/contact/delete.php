<?php

session_start();
include_once "../../config.php";
if(!isset($_SESSION['adminn'])){
    header('location: ../../login.php');
}
$id=($_POST['id']);
$item=select_contact_by_id($id);
delete_contact($id);
header('location: ../show_cantact.php');
