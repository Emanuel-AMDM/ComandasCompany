<?php

class OrderDAO{

    //Obtem todas as comandas do banco de dados
    public function findAll(): Array{
        //Executa a busca no banco
        $query = "SELECT * FROM cards";
        $result = DB::execute_query($query);

        //Se não encontrou nenhum registro com o id informado, volta null
        if(count($result) === 0){
            return[];
        }

        //Array de resposta
        $records = [];

        foreach($result as $row){
            //Cria um objeto Order
            $order = new Order();

            //Popular o objeto order com os dados que vieram do banco de dados
            $order->id = $row['id'];
            $order->number = $row['number'];
            $order->client_id = $row['client_id'];
            $order->created_at = $row['created_at'];
            $order->updated_at = $row['updated_at'];

            //Retorna o objeto do tipo pedido com os dados populados
            $records[] = $order;
        }

        //Retorna a lista com todos os registros encontrados no banco
        return $records;
    }

    //Obtem um pedido pelo ID no banco de dados
    public function findById(string $id)//:Order|null
    {
        //Executa a busca no banco
        $query = "SELECT * FROM cards WHERE id = $id";
        $results = DB::execute_query($query);

        //Se não encontrou nenhum registro com o id informado, volta null
        if(count($results) === 0){
            return null;
        }

        //Se encontrou o registro, pega o primeiro item
        [$row] = $results;//mesma coisa que "$row = $result[0];"

        //Cria um objeto Order
        $order = new Order();

        //Popula o objeto order com os dados que vieram do banco de dados
        $order->id = $row['id'];
        $order->number = $row['number'];
        $order->client_id = $row['client_id'];
        $order->created_at = $row['created_at'];
        $order->updated_at = $row['updated_at'];

        //Retorno o objeto do tipo pedido com os dados populados
        return $order;
    }

    //Obtem um pedido pelo numero da comanda registrado pelo usuario
    public function findByNumber(string $number)//:Order|null
    {
        //Executa a busca no banco
        $query = "SELECT * FROM cards WHERE number =  $number";
        $result = DB::execute_query($query);

        // Se não encontrou nenhum registro com o id informado, volta null
        if (count($result) === 0) {
            return null;
        }

        // Se encontrou o registro, pega o primeiro item
        [$row] = $result; // $row = $result[0]

        // Cria um objeto Order
        $order = new Order();

        // Popula o objeto order com os dados que vieram do banco de dados
        $order->id = $row['id'];
        $order->number = $row['number'];
        $order->client_id = $row['client_id'];
        $order->created_at = $row['created_at'];
        $order->updated_at = $row['updated_at'];

        // Retorno o objeto do tipo pedido com os dados populados
        return $order;
    }

    //Cria um novo registro de pedido no banco de dados
    public function create(Order $order){
        
        $order->created_at = date('Y-m-d H:i:s');
        $order->updated_at = date('Y-m-d H:i:s');

        $query = "INSERT INTO cards (number, client_id, created_at, updated_at) VALUES ($order->number, $order->client_id, '$order->created_at', '$order->updated_at')";
        DB::execute_query($query);
    }

    //Deleta um registro de pedido no banco de dados
    public function delete(string $id){

        $query = "DELETE FROM cards WHERE id = $id";
        DB::execute_query($query);
    }
}