<?php 
class Toy extends Prdouct{
    private $material;
    private $color;


    public function __construct(Category $category, $name, $brand, $price, $imageUrl, $isAvailable,$material, $color)
    {
        parent::__construct($category, $name, $brand, $price, $imageUrl, $isAvailable);
        $this ->color = $color;
        $this->material = $material;
    }
    public function getMaterial(){
        return $this->material;
    }
    public function getColor(){
        return $this->color;
    }
}
?>