<?php 
require_once __DIR__ . '/Product.php';

class Toy extends Product {
    private $material;
    private $color;

    public function __construct($name, $brand, $price, $imageUrl, $isAvailable, Category $category, $material, $color) {
        parent::__construct($name, $brand, $price, $imageUrl, $isAvailable, $category);
        $this->material = $material;
        $this->color = $color;
    }

    public function getMaterial() {
        return $this->material;
    }

    public function getColor() {
        return $this->color;
    }
}
?>