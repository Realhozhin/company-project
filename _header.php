<!doctype html>
<?php
    include_once "administrator/config.php";
    $item=latest_seo();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>my prsional website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- meta website -->
    <meta name="description" content="<?php echo $item['description'] ?>"/>
    <meta name="keywords" content="<?php echo $item['keywords'] ?>"/>
    <meta name="robots" content="index,follow"/>
    <meta name="author" content="<?php echo $item['author'] ?>"/>
    <!-- telegram -->
    <meta property="og:title" content="<?php echo $item['title'] ?>"/>
    <meta property="og:site_name" content="<?php echo $item['title'] ?>"/>
    <meta property="og:description" content="<?php echo $item['description'] ?>"/>
    <meta property="og:keywords" content="<?php echo $item['keywords'] ?>"/>
    <meta property="og:image" content="<?php echo $item['image'] ?>"/>
    <!-- twitter -->
    <meta property="twitter:title" content="<?php echo $item['title'] ?>"/>
    <meta property="twitter:site" content="<?php echo $item['title'] ?>"/>
    <meta property="twitter:description" content="<?php echo $item['description'] ?>"/>
    <meta property="twitter:creator" content="<?php echo $item['author'] ?>"/>
    <meta property="twitter:image" content="<?php echo $item['image'] ?>"/>
    <!-- css bootstrap -->
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.css">
    <!-- icon website -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="dist/bootstrap-icon/fonts/bootstrap-icons.woff">
    <link rel="stylesheet" href="dist/bootstrap-icon/fonts/bootstrap-icons.woff2">
    <!-- toastr -->
    <link rel="stylesheet" href="dist/toastr/toastr.min.css">
</head>
<body>

