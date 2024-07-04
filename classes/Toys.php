<?php

require_once __DIR__.'/Product.php';

class Toys extends Product{
    private $dimensions;
    private $material;

    public function __construct($name, $price, $category, $imgUrl, $dimensions, $material){
        parent::__construct($name, $price, $category, $imgUrl); 
        $this->dimensions = $dimensions;
        $this->material = $material;
    }

    public function getDimensions(){
        return $this->dimensions;
    }

    public function getmaterial(){
        return $this->material;
    }

    public function setDimensions($dimensions){
        $this->dimensions = $dimensions;
    }

    public function setMaterial($material){
        $this->material = $material;
    }
}

?>