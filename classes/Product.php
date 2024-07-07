<?php 
require_once __DIR__ . '/Category.php';

class Prdouct{
    /** @var [Category]*/
    private $category;

    private $name;
    private $brand;
    private $price;
    private $imageUrl;
    private $isAvailable;

    public function __construct( category $category, $name, $brand, $price, $imageUrl, $isAvailable){
        $this->category = $category;
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
        $this->imageUrl = $imageUrl;
        $this->isAvailable =$isAvailable;
    }

    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getImageUrl(){
        return $this->imageUrl;
    }
    public function getIsAvailable(){
        return $this->isAvailable;
    }
    public function getBrand(){
        return $this->brand;
    }
    public function getCategory(){
        return $this->category;
    }
}
