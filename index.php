<?php
include "model/database/DBconnect.php";
include "model/product/product.php";
include "model/product/productDB.php";
include "controller/productController.php";

$productController = new productController();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include "view/nava/nava.php" ?>
</head>
<body>
<div class="container">
    <div class="navbar navbar-default">
        <a class="navbar-brand" href="index.php">Product management</a>
    </div>
    <?php
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
    switch ($page) {
        case 'add':
            $productController->add();
            break;
//        case 'delete':
//            $productController->delete();
//            break;
//        case 'edit':
//            $productController->edit();
//            break;
        default:
            $productController->index();
            break;
    }
    ?>
</body>
</html>
