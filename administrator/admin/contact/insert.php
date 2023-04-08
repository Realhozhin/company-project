<?php
include_once "../../config.php";
$fullName=$_POST['fullName'];
$email=$_POST['email'];
$comment=$_POST['comment'];
try {
    insert_contact($fullName,$email,$comment);
    echo "successfully";
}catch (Exception $e) {
    echo "please try later";
}
header("Location: ../../../index.php");

