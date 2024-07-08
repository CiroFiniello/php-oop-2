<?php class Accessories extends Product{
    private $size;
    private $function;


    public function __construct($name, $brand, $price, $imageUrl, $isAvailable, Category $category, $size, $function)
    {
        parent::__construct( $name, $brand, $price, $imageUrl, $isAvailable, $category);
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
