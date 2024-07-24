<?php
//aqui fica todas as ações de banco que tenha a vê com produtos
class SaveController{

    public function save($number, $client_id, $dt_created, $dt_updated){
        // logica para salvar um produto no banco de dados
        $query = "INSERT INTO cards VALUES (NULL, $number, $client_id, $dt_created, $dt_updated)";
        $result = DB::execute_query($query);
    }
}