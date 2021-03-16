<?php

include 'Model.php';

class Category extends Model {
	private $id = null;
    private $name;
	
	public function __serialize(): array {	
		$serialize = [
			'name' => $this->name,
		];
		if ($this->id) $serialize['id'] = $this->id;
		return $serialize;
    }

    public function save($obj): array{
		$category = new Category();
		$category->id = null;
		$category->name = $obj->name;
		return $category->model_save();
	}

	public function update($obj): array {
		$category = new Category();
		$category->id = $obj->id;
		$category->name = $obj->name;
		return $category->model_update();
	}

	public function delete($obj): array {
		$category = new Category();
		$category->id = $obj->id;
		return $category->model_delete();
	}

	public function find($id = null): array {
		$category = new Category();
		$category->id = $id;
		return $category->model_find();
	}
}
