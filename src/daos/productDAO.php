<?php
//aqui fica todas as ações de banco que tenha a vê com produtos
class ProductDAO{

    //Cria um novo registro de pedido no banco de dados
    public function create(Product $product){

        $order->created_at = date('Y-m-d H:i:s');
        $order->updated_at = date('Y-m-d H:i:s');

        $query = "INSERT INTO products (sector, type, brand, flavor, size, value, created_at, updated_at) VALUES ('$product->sector', '$product->type', '$product->brand', '$product->flavor', '$product->size', '$product->value', '$product->created_at', '$product->updated_at')";
        DB::execute_query($query);
    }

    //Obtem todas as comandas do banco de dados
    public function findSector(): Array{
        //Executa a busca no banco
        $query = "SELECT * FROM atributtes_options WHERE type_id = 1";
        $results = DB::execute_query($query);

        //Se não encontrou nenhum registro com o id informado, volta null
        if(count($results) === 0){
            return[];
        }

        //Array de resposta
        $records = [];

        foreach($results as $row){
            //Cria um objeto Order
            $product = new Product();

            //Popular o objeto order com os dados que vieram do banco de dados
            $product->id = $row['id'];
            $product->type_id = $row['type_id'];
            $product->name = $row['name'];
            $product->created_at = $row['created_at'];
            $product->updated_at = $row['updated_at'];

            //Retorna o objeto do tipo pedido com os dados populados
            $records[] = $product;
        }

        //Retorna a lista com todos os registros encontrados no banco
        return $records;
    }
}