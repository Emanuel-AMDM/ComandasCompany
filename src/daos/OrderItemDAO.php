<?php

class OrderItemDAO{
    
    //Cria um pedido no banco de dados
    public function create(OrderItem $order_item){
        $order_item->amount = '10';
        $order_item->created_at = date('Y-m-d H:i:s');
        $order_item->updated_at = date('Y-m-d H:i:s');

        $query = "INSERT INTO orders (product_id, quantity, amount, created_at, updated_at) VALUES ($order_item->product_id, $order_item->quantity, $order_item->amount, '$order_item->created_at', '$order_item->updated_at')";
        DB::execute_query($query);
    }
}