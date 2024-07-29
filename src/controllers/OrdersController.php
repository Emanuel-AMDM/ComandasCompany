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

    //renderiza a pagina
    static function showCreatePage(){
        return view('pages/orders/create.php');
    }

    static function createOrder(){
        //Cria um novo objeto do tipo pedido
        $order = new Order();

        //Pega as informações enviadas via formulario POST e adiciona no objeto pedido
        $order->number = $_POST['number'];

        //Cria um novo objeto do tipo OrderDAO para salvar o objeto order no banco de dados
        $orderDAO = new OrderDAO();

        //Salva o objeto no banco de dados
        $orderDAO->create($order);

        //Redirect
        redirect('/comandas');
    }

    //renderiza a pagina
    static function showEditPage(string $id){

        //crio a instancia do banco
        $orderDAO = new OrderDAO();
        //traz as informações do banco a partir do $id passado
        $comanda = $orderDAO->findById($id);

        //cria o objeto ProductDAO
        $ProductDAO = new ProductDAO();
        //traz a function findall
        $produto = $ProductDAO->findAll();

        return view('pages/orders/edit.php',[
            'comanda' => $comanda,
            'produto' => $produto
        ]);
    }

    //renderiza a pagina
    static function showBillPage(){
        return view('page/orders/bill.php');
    }
}