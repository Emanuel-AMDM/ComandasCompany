<?php

class Order{

    //ID do pedido no banco de dados
    public $id;

    //Numero da comanda informada pelo cliente
    public $number;

    //ID do estabelecimento que a comanda pertence
    public $client_id;

    //Data que o registro foi criado
    public $created_at;

    //Data da ultima atualização do pedido
    public $updated_at;

    //Produtos adicionados no pedido
    public $products = [];

    public function __construct(){
    }

    public function add_product($product){
        $this->product[] = $product;
    }
}