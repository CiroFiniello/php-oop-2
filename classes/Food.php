<?php 
class Food extends Prdouct{
    private $calories;
    private $weight;
    private $ingredients;

    public function __construct($weight, $calories, $ingredients, Category $category, $name, $brand, $price, $imageUrl, $isAvailable)
    {
        parent::__construct($category, $name, $brand, $price, $imageUrl, $isAvailable);
        $this ->weight = $weight;
        $this->calories = $calories;
        $this->ingredients = $ingredients;
    }
    public function getWeight(){
        return $this->weight;
    }
    public function getCalories(){
        return $this->calories;
    }
    public function getIngredients(){
        return $this->ingredients;
    }
}
?>