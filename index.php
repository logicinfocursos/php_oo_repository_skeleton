<?php

class Product {
    private $name;
}

class Category {
    private $name;
}

interface IRepository {
    public function getAll();
}

abstract class BaseRepository implements IRepository {
    protected $table;

    public function __construct($table) {
        $this->table = $table;
    }

    public function getAll() {
        $name = '>>> getAll: ' . $this->table;
        return $name;
    }
}

class ProductRepository extends BaseRepository {
    public function __construct() {
        parent::__construct("products");
    }
}

class CategoryRepository extends BaseRepository {
    public function __construct() {
        parent::__construct("categories");
    }
}

$productRepository = new ProductRepository();
echo $productRepository->getAll();

$categoryRepository = new CategoryRepository();
echo $categoryRepository->getAll();
