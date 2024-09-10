<?php

class OrderItem{

    //ID do pedido no banco de dados
    public $id;

    //ID do produto no banco de dados
    public $product_id;

    //Quantidade do produto adicionado
    public $quantity;

    //Valor do produto adicionado
    public $amount;

    //Id da comanda atrelada ao pedido
    public $card_id;

    //Data que o registro foi criado
    public $created_at;

    //Data da ultima atualização do pedido
    public $updated_at;
}