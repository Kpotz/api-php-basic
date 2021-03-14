<?php

include 'Model.php';

class Product extends Model {
	private $id = null;
    private $name;
    private $description;
    private $image;
    private $fk_category;
	
	public function __serialize(): array {	
		$serialize = [
			'name' => $this->name,
        	'description' => $this->description,
        	'image' => $this->image,
        	'fk_category' => $this->fk_category,
		];
		if ($this->id) $serialize['id'] = $this->id;
		return $serialize;
    }

    public function save($obj): array{
		$product = new Product();
		$product->id = null;
		$product->name = $obj->name;
		$product->description = $obj->description;
		$product->image = $obj->image;
		$product->fk_category = $obj->fk_category;
		return $product->model_save();
	}

	/*public function update($obj): array {
		$user = new User();
		$user->id = $obj->id;
		$user->name = $obj->name;
		$user->pass = md5($obj->pass);
		$user->permission = $obj->permission;
		return $user->model_update();
	}

	public function delete($obj): array {
		$user = new User();
		$user->id = $obj->id;
		return $user->model_delete();
	}*/

	public function find($id = null): array {
		$product = new Product();
		$product->id = $id;
		return $product->model_find();
	}
}
