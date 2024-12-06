<?php

namespace Controllers;

use Models\Product;

class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function index() {
        $products = $this->productModel->all();
        require 'views/index.php';
    }

    public function create() {
        require 'views/create.php';
    }

    public function store() {
        $name = $_POST['name'];
        $price = $_POST['price'];

        if ($this->productModel->create($name, $price)) {
            header("Location: /crud_route/");
        }
    }

    public function edit($id) {
        $product = $this->productModel->find($id);
        require 'views/edit.php';
    }

    public function update($id) {
        $name = $_POST['name'];
        $price = $_POST['price'];

        if ($this->productModel->update($id, $name, $price)) {
            header("Location: /crud_route/");
        }
    }

    public function delete($id) {
        if ($this->productModel->delete($id)) {
            header("Location: /crud_route/");
        }
    }
}
