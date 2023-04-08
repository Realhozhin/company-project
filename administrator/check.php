<?php
include_once "config.php";
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$secure=sha1($password);
// var_dump($username);
// var_dump($password);
$conn=conncet_to_db();
$query=select_admin();
$flag=true;
while ($item=mysqli_fetch_assoc($query)){
    if ($item['username']===$username && $item['password']===$secure){
        $_SESSION['adminn']=$username;
        header('location: admin/admin.php');
        $flag=false;
    }
}
if ($flag===true) {
    $_SESSION['wrongggg']="username or password is incorrect";
    header('location: login.php');
}