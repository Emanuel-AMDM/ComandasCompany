<?php

class Product {

    //id do produto
    public $id;

    public $name;

    //valor do produto
    public $price;
    
    //Data que o registro foi criado
    public $created_at;

    //Data da ultima atualização do pedido
    public $updated_at;

    public $attribute_options = [];

    public function addAttributeOption(AttributeOption $attribute_option) {
        $this->attribute_options[] = $attribute_option;
    }
}