<?php

include 'Controller.php';
include '../../models/Category.php';


class CategoryController extends Controller{
	function save($obj) {
		$category = new Category();
		return $category->save($obj);
	}
	function update($obj){
		$category = new Category();
		return $category->update($obj);
	}

	function delete($obj){
		$category = new Category();
		return $category->delete($obj);
	}

	function find($id = null){
		$category = new Category();
		return $category->find($id);
	}

	function findAll(){
		$category = new Category();
		return $category->findAll();
	}
}