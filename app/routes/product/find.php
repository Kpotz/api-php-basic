<?php

include '../../controllers/ProductController.php';

$userController = new ProductController();

$id = isset($_GET['id']) ? $_GET['id'] : null;

header('Content-Type: application/json');

$product = $productController->find($id);

echo json_encode($product);