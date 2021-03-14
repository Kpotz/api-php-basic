<?php

include 'Model.php';

class Product extends Model {
	private $id = null;
    private $name;
    private $description;
    private $image;
    private $category;
	
	public function __serialize(): array {	
		$serialize = [
			'name' => $this->name,
        	'description' => $this->description,
        	'image' => $this->image,
        	'category' => $this->category,
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
		$product->category = $obj->category;
		return $product->model_save();
	}

	public function find($id = null): array {
		$product = new Product();
		$product->id = $id;
		return $product->model_find();
	}
}
