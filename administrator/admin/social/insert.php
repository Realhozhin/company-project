<?php

include_once "../../config.php";
if (isset($_SESSION['adminn'])) {
    header('location: ../../login.php');
}
$telegram=$_POST['telegram'];
$instagram=$_POST['instagram'];
$twitter=$_POST['twitter'];
$facebook=$_POST['facebook'];
insert_social($telegram,$instagram,$twitter,$facebook);
header('location: create_social.php');
