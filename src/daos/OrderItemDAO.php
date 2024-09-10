<?php

class OrderItemDAO{

    //Obtem todos os pedidos do banco de dados
    public function findByItemOrderId($id):Array{

        //Executa query no banco
        $query = "SELECT orders.id as id,
                        products.name as product,
                        orders.quantity as quantity,
                        products.price as amount,
                        DATE_FORMAT(orders.created_at,'%d/%m/%Y às %H:%i') as created_at,
                        orders.updated_at as updated_at
                    FROM orders,
                        products
                    WHERE orders.product_id = products.id
                    AND orders.card_id = $id";
        $result = DB::execute_query($query);

        //Se não encontrar nenhum resultado volta null
        if(count($result) === 0){
            return[];
        }

        //Array de resposta
        $records = [];

        foreach($result as $row){
            //cria um objeto orderItem
            $order_item = new Order();

            //Popular o objeto order com os dados que vieram do banco de dados
            $order_item->id = $row['id'];
            $order_item->product_id = $row['product'];
            $order_item->quantity = $row['quantity'];
            $order_item->amount = $row['amount'];
            $order_item->created_at = $row['created_at'];
            $order_item->updated_at = $row['updated_at'];

            //Retorna o objeto do tipo pedidoItens com os dados populados
            $records[] = $order_item;
        }

        //Retorna a lista com todos os registros do banco
        return $records;
    }
    
    //Cria um pedido no banco de dados
    public function create(OrderItem $order_item){
        $order_item->amount = '10';
        $order_item->created_at = date('Y-m-d H:i:s');
        $order_item->updated_at = date('Y-m-d H:i:s');

        $query = "INSERT INTO orders (product_id, quantity, amount, card_id, created_at, updated_at) VALUES ($order_item->product_id, $order_item->quantity, $order_item->amount, $order_item->card_id, '$order_item->created_at', '$order_item->updated_at')";
        DB::execute_query($query);
    }

    //Deleta um registro de pedido no banco de dados
    public function delete(string $id){

        $query = "DELETE FROM orders WHERE id = $id";
        DB::execute_query($query);
    }
}