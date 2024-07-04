<?php

require_once __DIR__.'/Product.php';


class Food extends Product{
    private $weight;
    private $ingredients;

    public function __construct($name, $price, $category, $imgUrl, $weight, $ingredients){
        parent::__construct($name, $price, $category, $imgUrl);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function getIngredients(){
        return $this->ingredients;
    }

    public function setWeight($weight){
        $this->weight = $weight;
    }

    public function setIngredients($ingredients){
        $this->ingredients = $ingredients;
    }
}

?>