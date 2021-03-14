<?php

include 'Controller.php';
include '../../models/Product.php';


class ProductController extends Controller{
	function save($obj) {
		$product = new Product();
		return $product->save($obj);
	}

	/*function update($obj){
		$product = new User();
		return $product->update($obj);
	}

	function delete($obj){
		$product = new User();
		return $product->delete($obj);
	}*/

	function find($id = null){
		$product = new Product();
		return $product->find($id);
	}

	function findAll(){
		$product = new Product();
		return $product->findAll();
	}
}