<?php

class Order{

    public $id; //number

    public $products = [];

    public function __construct($order){//number
        $this->id = $order;
    }

    public function add_product(/*Product*/ $product){
        $this->product[] = $product;
    }

}

class Product{

    public $name; //string

    public function __construct(string $product){
        $this->name = $product;
    }

}

class Bar{

    public $orders = []; //array<Order>

    public $products = []; //array<Product>

    public function create_order(Order $order){
        $this->orders[] = $order;
    }

    public function delete_order(Order $order){
        $search_order = array_search($order, $this->orders);

        unset($this->orders[$search_order]);
    }

    public function search_order($order){ //number
        foreach($this->orders as $orders){
            if($orders->id == $order){
                return $orders;
            }
        }
        return null;
    }

    public function create_product(Product $product){
        $this->products[] = $product;
    }

    public function delete_product(Product $product){
        $search_product = array_search($product, $this->products);

        unset($this->products[$search_product]);
    }

    public function search_product(string $name){
        foreach($this->products as $product){
            if($product->name == $name){
                return $product;
            }
        }
        return null;
    }

    public function add_product_in_order(string $name,/*number*/ $order){
        $order = $this->search_order($order);

        $product = $this->search_product($name);

        $order->add_product($name);
    }

}

$bar = new Bar();
$order = new Order(55);
$product = new Product('produto1');

$bar->create_order($order);
var_dump($bar);

$bar->create_product($product);
var_dump($bar);

$bar->search_order(55);
var_dump($bar);

$bar->search_product('produto1');
var_dump($bar);

$bar->add_product_in_order('produto1', 55);
var_dump($bar);

$bar->delete_order($order);
var_dump($bar);

$bar->search_order(55);
var_dump($bar);