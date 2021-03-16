<?php

include '../../controllers/ProductController.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);

if(!empty($data)){	
    $productController = new ProductController();
    echo json_encode($productController->save($obj));
    var_dump($obj);
}