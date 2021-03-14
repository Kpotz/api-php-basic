<?php

include '../../controllers/CategoryController.php';

$categoryController = new CategoryController();

$id = isset($_GET['id']) ? $_GET['id'] : null;

header('Content-Type: application/json');

$category = $categoryController->find($id);

echo json_encode($category);