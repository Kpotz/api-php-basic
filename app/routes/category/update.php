<?php

include '../../controllers/CategoryController.php';

$data = file_get_contents('php://input');
$obj =  json_decode($data);

$categoryController = new CategoryController();

$categorys = $categoryController->update($obj);

if(!empty($data)){	
    $categoryController = new CategoryController();
    echo json_encode($categoryController->update($obj));
}