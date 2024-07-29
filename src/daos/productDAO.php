<?php
//aqui fica todas as ações de banco que tenha a vê com produtos
class ProductDAO {

    //Obtem todos os produtos via banco de dados
    public function FindAll(): Array{

        //Executa a query do banco de dados
        $query = "SELECT * FROM products";
        $results = DB::execute_query($query);

        //Se não encontrou nenhum resultado, volta null
        if(count($results) === 0){
            return[];
        }

        //Array de resposta
        $records = [];

        foreach($results as $row){
            //Cria um objeto Product
            $product = new Product();

            //Popular o objeto order os dados que vieram do banco de dados
            $product->id = $row['id'];
            $product->name = $row['name'];
            $product->price = $row['price'];
            $product->created_at = $row['created_at'];
            $product->updated_at = $row['updated_at'];

            //Retorna o objeto tipo produto com os dados populados
            $records[] = $product;
        }

        //Retorna a lista com todos os registros encontrados no banco
        return $records;
    }

    //Cria um novo registro de pedido no banco de dados
    public function create(Product $product){

        $product->created_at = date('Y-m-d H:i:s');
        $product->updated_at = date('Y-m-d H:i:s');

        // Insere o produto no banco e obtem o id do registro inserido
        $query = "INSERT INTO products (price, name, created_at, updated_at) VALUES ('$product->price', '$product->name', '$product->created_at', '$product->updated_at')";
        $productId = DB::execute_query($query);

        foreach ($product->attribute_options as $attribute_option) {
            $query = "INSERT INTO products_attributes_options (product_id, attribute_option_id, created_at, updated_at) VALUES ('$productId', '$attribute_option->id', '$product->created_at', '$product->updated_at')";

            DB::execute_query($query);
        }
    }
}