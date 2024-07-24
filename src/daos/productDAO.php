<?php
//aqui fica todas as ações de banco que tenha a vê com produtos
class ProductDAO{

    public function save($product){
        // logica para salvar um produto no banco de dados
        $query = "INSERT INTO products values()";
        $result = DB::execute_query($query);
    }

    public function update($id){
        // logica para atualizar um produto no banco de dados
        $query = "UPDATE products SET entidade = 'entidade' WHERE id = $id";
        $result = DB::execute_query($query);
    }

    public function find($id){
        // logica para buscar um produto no banco de dados
        $query = "SELECT * FROM products";
        $result = DB::execute_query($query);
    }

    public function remove($id){
        // logica para remover um produto no banco de dados
        $query = "DELETE FROM products WHERE id = $id";
        $result = DB::execute_query($query);
    }
}