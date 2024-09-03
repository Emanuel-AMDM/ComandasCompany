<?php

session_start();

class ClientDAO{
    
    public function findByEmail(String $email){

        //Executa busca no banco
        $query = "SELECT * FROM clients WHERE email = '$email'";
        $result = DB::execute_query($query);

        //Volta null caso não encontre resultado
        if(count($result) === 0){
            return null;
        }

        //Se encontrou registro, pega o primeiro item
        [$row] = $result;

        //Cria o objeto client
        $client = new Client();

        //Popula o objeto client com os dados do banco
        $client->id = $row['id'];
        $client->name = $row['name'];
        $client->email = $row['email'];
        $client->password = $row['password'];
        $client->created_at = $row['created_at'];
        $client->updated_at = $row['updated_at'];
        
        //Retorna o objeto do tipo client com os dados populados
        return $client;
    }
}