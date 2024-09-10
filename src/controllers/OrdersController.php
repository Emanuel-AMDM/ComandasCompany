<?php

class OrdersController{
    //renderiza a pagina
    static function showIndexPage(){
        //cria a instancia
        $orderDAO = new OrderDAO();
        //traz a function findAll
        $comandas = $orderDAO->findAll();

        return view('pages/orders/index.php', [
            'comandas' => $comandas //passa a variavel com as info do findAll para a pagina
        ]);
    }

    //deleta um registro
    static function deleteOrder($id){
        //cria a instancia
        $orderDAO = new OrderDAO();

        $orderDAO->delete($id);

        //Redirect
        redirect('/comandas');
    }

    //renderiza a pagina
    static function showCreatePage(){
        return view('pages/orders/create.php');
    }

    static function createOrder(){
        session_start();
        $_SESSION['user'] = serialize($client);
        
        //Cria um novo objeto do tipo pedido
        $order = new Order();

        //Pega as informações enviadas via formulario POST e adiciona no objeto pedido
        $order->number = $_POST['number'];
        $order->client_id = $_POST['client_id'];

        //Cria um novo objeto do tipo OrderDAO para salvar o objeto order no banco de dados
        $orderDAO = new OrderDAO();

        //Salva o objeto no banco de dados
        $orderDAO->create($order);

        //Redirect
        redirect('/comandas');
    }

    //renderiza a pagina
    static function showEditPage(string $id){
        //FindAll da tabela com os pedidos
        //cria o objeto OrderItemDAO
        $OrderItemDAO = new OrderItemDAO();
        //traz a function findall
        $itens = $OrderItemDAO->findByItemOrderId($id);

        //crio a instancia do banco
        $orderDAO = new OrderDAO();
        //traz as informações do banco a partir do $id passado
        $comanda = $orderDAO->findById($id);

        //FindAll do campo produto
        //cria o objeto ProductDAO
        $ProductDAO = new ProductDAO();
        //traz a function findall
        $produto = $ProductDAO->findAll();

        return view('pages/orders/edit.php',[
            'comanda' => $comanda,
            'produto' => $produto,
            'itens' => $itens
        ]);
    }

    //renderiza a pagina
    static function showBillPage($id){
        //cria a instancia OrderItemDAO
        $OrderItemDAO = new OrderItemDAO();

        //traz os pedidos da comanda
        $itens = $OrderItemDAO->findByItemOrderId($id);

        //cria a instancia OrderDAO
        $orderDAO = new OrderDAO();

        //traz informações da comanda
        $comanda = $orderDAO->findById($id);

        return view('pages/orders/bill.php', [
            'itens' => $itens,
            'comanda' => $comanda
        ]);
    }
}