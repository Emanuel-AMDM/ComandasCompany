<?php

class Order{

    public $id;

    public $products = [];

    public function __construct($id){
        $this->id = $id;
    }

    public function add_product($product){
        $this->product[] = $product;
    }
}