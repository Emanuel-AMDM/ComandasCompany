<?php
//aqui fica todas as ações de banco que tenha a vê com produtos
class ProductDAO{

    //Cria um novo registro de pedido no banco de dados
    public function create(Product $product){

        $product->created_at = date('Y-m-d H:i:s');
        $product->updated_at = date('Y-m-d H:i:s');

        $query = "INSERT INTO products (sector, type, brand, flavor, size, value, created_at, updated_at) VALUES ('$product->sector', '$product->type', '$product->brand', '$product->flavor', '$product->size', '$product->value', '$product->created_at', '$product->updated_at')";
        DB::execute_query($query);
    }
}