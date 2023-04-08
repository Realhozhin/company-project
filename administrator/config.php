<?php
define("URL", "http://localhost/learning.php/tools/elecodecenter/project8.php/");
define("BOOTSTRAPLINK", "http://localhost/learning.php/tools/elecodecenter/project8.php/dist/admin/bootstrap/css/bootstrap.min.css");
function conncet_to_db(){
    $conn=mysqli_connect("localhost","root","","company");
    return $conn;
}
function select_admin(){
    $conn=conncet_to_db();
    $query=mysqli_query($conn, "select * from login");
    return $query;

}
function insert_admin($username,$securitypasswords,$access)
{
    $conn = conncet_to_db();
    mysqli_query($conn, "insert into login(username,password,access)values('$username','$securitypasswords','$access')");
}
    /////////////////////////// crud seo
function insert_seo($title,$author,$keywords,$description,$image) {
    $conn=conncet_to_db();
    mysqli_query($conn,"insert into seo(title,author,keywords,description,image)values('$title','$author','$keywords','$description','$image')");
}
function upload_file($image) {
    $image_name=time().$image['name'];
    $directory="../images/seo/".$image_name;
    move_uploaded_file($image['tmp_name'],$directory);
    return $image_name;
}
function select_seo() {
    $conn=conncet_to_db();
    $query=mysqli_query($conn,"select * from seo");
    return $query;
}
function select_by_idseo($id) {
    $conn=conncet_to_db();
    $query=mysqli_query($conn,"select * from seo where id=$id");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function delete_seo($id) {
    $conn=conncet_to_db();
    mysqli_query($conn,"delete from seo where id=$id");
}
function update_seo($title,$author,$keywords,$description,$image,$id) {
    $conn=conncet_to_db();
    mysqli_query($conn,"update seo set title='$title', author='$author', keywords='$keywords', description='$description', image='$image' where id=$id");
}
/////////////////////////// end crud seo

function select_by_id_seo($image,$id) {
    $item=select_by_idseo($id);
    if($image['name']==null) {
        return $image_name=$item['image'];
    } else {
        $image_delete=$item['image'];
        unlink('../images/seo/'.$image_delete);
        return $image_name=upload_file($image);
    }
}
function latest_seo() {
    $conn=conncet_to_db();
    $query=mysqli_query($conn, "SELECT * from seo order by id desc limit 1 offset 0");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function insert_slider($title,$explanation,$link,$image_name) {
    $conn=conncet_to_db();
    mysqli_query($conn, "insert into slider(title,explanation,link,image)values('$title','$explanation','$link','$image_name')");
}
function select_slider() {
    $conn=conncet_to_db();
    $query=mysqli_query($conn,"select * from slider");
    return $query;
}
function select_slider_by_id($id) {
    $conn=conncet_to_db();
    $query=mysqli_query($conn,"select * from slider where id=$id");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function delete_slider($id) {
    $conn=conncet_to_db();
    mysqli_query($conn,"delete from slider where id=$id");
}
function select_by_idslider($id) {
    $conn=conncet_to_db();
    $query=mysqli_query($conn,"select * from slider where id=$id");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function upload_file_slider($image) {
    $image_name=time().$image['name'];
    $directory="../images/slider/".$image_name;
    move_uploaded_file($image['tmp_name'],$directory);
    return $image_name;
}
function select_by_id_slider($image,$id) {
    $item=select_by_idslider($id);
    if($image['name']==null) {
        return $image_name=$item['image'];
    } else {
        $image_delete=$item['image'];
        unlink('../images/slider/'.$image_delete);
        return $image_name=upload_file_slider($image);
    }
}
function update_slider($title,$explanation,$link,$image_name,$id) {
    $conn=conncet_to_db();
    mysqli_query($conn,"update slider set title='$title', explanation='$explanation', link='$link', image='$image_name' where id=$id");
}
function latest_slider() {
    $conn=conncet_to_db();
    $query=mysqli_query($conn,"select * from slider order by id desc limit 1 offset 0");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function insert_product($title,$description,$image_name) {
    $conn=conncet_to_db();
    mysqli_query($conn, "insert into product(image,title,description)values('$image_name','$title','$description')");
}
function select_product() {
    $conn=conncet_to_db();
    $query=mysqli_query($conn, "select * from product");
    return $query;
}
function select_product_by_id($id) {
    $conn=conncet_to_db();
    $query=mysqli_query($conn,"select * from product where id=$id");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function delete_product($id) {
    $conn=conncet_to_db();
    mysqli_query($conn,"delete from product where id=$id");
}
function select_by_idproduct($id) {
    $conn=conncet_to_db();
    $query=mysqli_query($conn,"select * from product where id=$id");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function upload_file_product($image) {
    $image_name=time().$image['name'];
    $directory="../images/product/".$image_name;
    move_uploaded_file($image['tmp_name'],$directory);
    return $image_name;
}
function select_by_id_product($image,$id) {
    $item=select_by_idproduct($id);
    if($image['name']==null) {
        return $image_name=$item['image'];
    } else {
        $image_delete=$item['image'];
        unlink('../images/product/'.$image_delete);
        return $image_name=upload_file_product($image);
    }
}
function update_product($title,$description,$image_name,$id) {
    $conn=conncet_to_db();
    mysqli_query($conn,"update product set title='$title', description='$description', image='$image_name' where id=$id");
}
function insert_ttpacs($description,$image_name,$address) {
    $conn=conncet_to_db();
    mysqli_query($conn, "insert into ttpacs(description,image,address)values('$description','$image_name','$address')");
}
function select_ttpacs() {
    $conn=conncet_to_db();
    $query=mysqli_query($conn, "select * from ttpacs");
    return $query;
}
function delete_ttpacs($id) {
    $conn=conncet_to_db();
    mysqli_query($conn,"delete from ttpacs where id=$id");
}
function select_ttpacs_by_id($id) {
    $conn=conncet_to_db();
    $query=mysqli_query($conn,"select * from ttpacs where id=$id");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function select_by_idttpacs($id) {
    $conn=conncet_to_db();
    $query=mysqli_query($conn,"select * from ttpacs where id=$id");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function upload_file_ttpacs($image) {
    $image_name=time().$image['name'];
    $directory="../images/ttpacs/".$image_name;
    move_uploaded_file($image['tmp_name'],$directory);
    return $image_name;
}
function select_by_id_ttpacs($image,$id) {
    $item=select_by_idttpacs($id);
    if($image['name']==null) {
        return $image_name=$item['image'];
    } else {
        $image_delete=$item['image'];
        unlink('../images/ttpacs/'.$image_delete);
        return $image_name=upload_file_ttpacs($image);
    }
}
function update_ttpacs($description,$address,$image_name,$id) {
    $conn=conncet_to_db();
    mysqli_query($conn,"update ttpacs set description='$description', address='$address',image='$image_name' where id=$id");
}
function insert_contact($fullName,$email,$comment) {
    $conn=conncet_to_db();
    mysqli_query($conn, "insert into contact(fullName,email,comment)values('$fullName','$email','$comment')");
}
function select_contact() {
    $conn=conncet_to_db();
    $query=mysqli_query($conn, "select * from contact");
    return $query;
}
function select_contact_by_id($id) {
    $conn=conncet_to_db();
    $query=mysqli_query($conn,"select * from contact where id=$id");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function delete_contact($id) {
    $conn=conncet_to_db();
    mysqli_query($conn,"delete from contact where id=$id");
}
function insert_social($telegram,$instagram,$twitter,$facebook) {
    $conn=conncet_to_db();
    mysqli_query($conn, "insert into social(telegram,instagram,twitter,facebook)values('$telegram','$instagram','$twitter','$facebook')");
}
function select_social() {
    $conn=conncet_to_db();
    $query=mysqli_query($conn, "select * from social");
    return $query;
}
function select_social_by_id($id) {
    $conn=conncet_to_db();
    $query=mysqli_query($conn,"select * from social where id=$id");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function delete_social($id) {
    $conn=conncet_to_db();
    mysqli_query($conn,"delete from social where id=$id");
}
function latest_spcial() {
    $conn=conncet_to_db();
    $query=mysqli_query($conn,"select * from social order by id desc limit 1 offset 0");
    $item=mysqli_fetch_assoc($query);
    return $item;
}
function search($search) {
    $conn=conncet_to_db();
    $query=mysqli_query($conn,"select * from product where title like '%".$search."%'");
    return $query;
}