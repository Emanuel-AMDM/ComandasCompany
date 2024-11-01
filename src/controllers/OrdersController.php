<?php

class OrdersController{
    //renderiza a pagina
    static function showIndexPage(){

        //recebe o filter da pagina
        $filter = isset($_GET['filter']) ? $_GET['filter'] : null; 

        //cria a instancia
        $orderDAO = new OrderDAO();
        //traz a function findAll
        $comandas = $orderDAO->findAll($filter);

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
        //Cria um novo objeto do tipo pedido
        $order = new Order();

        $client = Auth::user();

        //Pega as informações enviadas via formulario POST e adiciona no objeto pedido
        $order->number = $_POST['number'];
        $order->client_id = $client->id;

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
        $produto = $ProductDAO->findAllComand();

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

        //calcula o valor total da comanda a ser pago
        $resultTotal = 0;
        
        foreach($itens as $item){
            $result = $item->amount * $item->quantity;
            $resultTotal = $result + $resultTotal;
        }

        //Calcula o valor total da comanda a ser pago com 10% do garçon
        $resultTotal10 = $resultTotal * 0.1;
        $resultTotal10 = $resultTotal + $resultTotal10;

        //cria a instancia OrderDAO
        $orderDAO = new OrderDAO();

        //traz informações da comanda
        $comanda = $orderDAO->findById($id);

        return view('pages/orders/bill.php', [
            'itens' => $itens,
            'comanda' => $comanda,
            'resultTotal' => $resultTotal,
            'resultTotal10' => $resultTotal10
        ]);
    }

    static function billPaid(){
        //cria a instancia Sale
        $sale = new Sale();

        //armazena o valor do botao
        $save = $_POST['save'];

        //identifica qual botão foi clicado e armazena o valor
        if($save === 1){
            $sale->amount = $_POST['resultTotal'];
        }else{
            $sale->amount = $_POST['resultTotal10'];
        }

        //armazena o restante das informações
        $sale->card_id = $_POST['order_id'];

        $saleDAO = new SaleDAO();

        $saleDAO->create($sale);

        redirect('/comandas');
    }
}