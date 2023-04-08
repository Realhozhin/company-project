<?php
session_start();
$_SESSION['adminn']=null;
$_SESSION['wrongg']=null;
header('location: login.php');