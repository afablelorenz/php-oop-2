<?php

require_once __DIR__.'/Product.php';

class Accessories extends Product{
    private $material;
    private $dimensions;
    private $type;

    public function __construct($name, $price, $category, $imgUrl, $material, $dimensions, $type){
        parent::__construct($name, $price, $category, $imgUrl);
        $this->material = $material;
        $this->dimensions = $dimensions;
        $this->type = $type;
    }

    public function getMaterial(){
        return $this->material;
    }

    public function getDimensions(){
        return $this->dimensions;
    }

    public function getType(){
        return $this->type;
    }

    public function setMaterial($material){
        $this->material = $material;
    }

    public function setDimensions($dimensions){
        $this->dimensions = $dimensions;
    }

    public function setType($type){
        $this->type = $type;
    }
}

?>