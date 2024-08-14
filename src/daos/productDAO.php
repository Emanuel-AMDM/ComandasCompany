<?php
//aqui fica todas as ações de banco que tenha a vê com produtos
class ProductDAO {

    //Obtem todos os produtos via banco de dados
    public function FindAll(): Array{

        //Executa a query do banco de dados
        $query = "SELECT * FROM products";
        $result = DB::execute_query($query);

        //Se não encontrou nenhum resultado, volta null
        if(count($result) === 0){
            return[];
        }

        //Array de resposta
        $records = [];

        foreach($result as $row){
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

    //Edita um registro de produto
    public function edit(Product $product){

        //não vem pelo post
        $product->updated_at = date('Y-m-d H:i:s');

        // Update o produto no banco pelo id inserido
        $query = "UPDATE products SET price = '$product->price', name = '$product->name', created_at = '$product->created_at', updated_at = '$product->updated_at' WHERE id = $product->id";
        DB::execute_query($query);

        $query = "DELETE FROM products_attributes_options WHERE product_id = $product->id";
        DB::execute_query($query);

        foreach ($product->attribute_options as $attribute_option) {
            $query = "INSERT INTO products_attributes_options (product_id, attribute_option_id, created_at, updated_at) VALUES ('$product->id', '$attribute_option->id', '$product->created_at', '$product->updated_at')";

            DB::execute_query($query);
        }
    }
    
    //Deleta um registro de pedido no banco de dados
    public function delete(string $id){

        $query = "DELETE FROM products WHERE id = $id";
        DB::execute_query($query);

        $query = "DELETE FROM products_attributes_options WHERE product_id = $id";
        DB::execute_query($query);
    }

    /**
     * Obtem um produto pelo ID via banco
     */
    public function findByID(String $id)//:Order|null
    {
        //Executa a busca no banco
        $query = "SELECT * FROM products WHERE id = $id";
        $result = DB::execute_query($query);

        //Volta null caso não encontre resultado
        if(count($result) === 0){
            return null;
        }

        //Se encontrou o registro, pega o primeiro item
        [$row] = $result;

        //Cria o objeto product
        $product = new Product();

        //Popula o objeto product com os dados que vieram do banco
        $product->id = $row['id'];
        $product->name = $row['name'];
        $product->price = $row['price'];
        $product->created_at = $row['created_at'];
        $product->updated_at = $row['updated_at'];

        //Retorna o objeto do tipo product com os dados populados
        return $product;
    }
}