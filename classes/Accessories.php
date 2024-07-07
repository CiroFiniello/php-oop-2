<?php 
class Accessories extends Prdouct{
    private $size;
    private $function;


    public function __construct($weight, $calories, $ingredients, Category$category, $name, $brand, $price, $imageUrl, $isAvailable)
    {
        parent::__construct( category $category, $name, $brand, $price, $imageUrl, $isAvailable);
        $this ->size = $size;
        $this->function = $function;
    }
    public function getSize(){
        return $this->size;
    }
    public function getFunction(){
        return $this->function;
    }
}
?>