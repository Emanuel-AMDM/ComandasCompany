<?php

class OrderItemController{

    //Cria um novo pedido
    static function createOrderItem(){

        //Cria um novo objeto do tipo item do pedido
        $order_item = new OrderItem();

        //Pega as informações enviadas via form POST e adiciona no objeto item do pedido
        $order_item->product_id = $_POST['product_id'];
        $order_item->quantity = $_POST['quantity'];

        //Cria um novo objeto do tipo OrderItemDAO para salvar o objeto no banco de dados
        $orderItemDAO = new OrderItemDAO();

        //Salva o objeto no banco de dados
        $orderItemDAO->create($order_item);

        //Redirect
        redirect('/comandas');
    }
    
    //deleta um registro
    static function deleteOrderItem($id){
        //cria a instancia
        $OrderItemDAO = new OrderItemDAO();

        $OrderItemDAO->delete($id);

        //Redirect
        redirect("/comandas/$id/edit");
    }
}