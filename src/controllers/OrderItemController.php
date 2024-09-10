<?php

class OrderItemController{

    //Cria um novo pedido
    static function createOrderItem($id){

        //Cria um novo objeto do tipo item do pedido
        $order_item = new OrderItem();

        //Pega as informações enviadas via form POST e adiciona no objeto item do pedido
        $order_item->product_id = $_POST['product_id'];
        $order_item->quantity = $_POST['quantity'];
        $order_item->card_id = $_POST['id_comanda'];

        //Cria um novo objeto do tipo OrderItemDAO para salvar o objeto no banco de dados
        $orderItemDAO = new OrderItemDAO();

        //Salva o objeto no banco de dados
        $orderItemDAO->create($order_item);

        //Redirect
        redirect("/comandas/$id/edit");
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