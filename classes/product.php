<?php

class Product{
    private $name;
    private $price;
    private $category;
    private $imgUrl;

    public function __construct($name,$price,$category,$imgUrl){
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->imgUrl = $imgUrl;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getImgUrl(){
        return $this->imgUrl;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function setCategory($category){
        $this->category = $category;
    }

    public function setImgUrl($imgUrl){
        $this->imgUrl = $imgUrl;
    }
}

?>