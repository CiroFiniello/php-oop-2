<?php 
require_once __DIR__ . '/Product.php';

class Food extends Product {
    private $weight;
    private $ingredients;
    private $calories;

    public function __construct($name, $brand, $price, $imageUrl, $isAvailable, Category $category, $weight, $ingredients, $calories) {
        parent::__construct($name, $brand, $price, $imageUrl, $isAvailable, $category);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
        $this->calories = $calories;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getIngredients() {
        return $this->ingredients;
    }
}
?>