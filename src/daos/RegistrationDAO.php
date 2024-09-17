<?php

class RegistrationDAO{

    //Cria um novo registro de opção de atributo
    public function create(Registration $registration){
        
        //não vem pelo post
        $registration->created_at = date('Y-m-d H:i:s');
        $registration->updated_at = date('Y-m-d H:i:s');

        $query = "INSERT INTO attribute_options (type_id, name, created_at, updated_at) VALUES ($registration->type_id, '$registration->name', '$registration->created_at', '$registration->updated_at')";
        DB::execute_query($query);
    }

    //Edita um novo registro de opção de atributo
    public function edit(Registration $registration){

        //não vem pelo post
        $registration->created_at = date('Y-m-d H:i:s');
        $registration->updated_at = date('Y-m-d H:i:s');

        $query = "UPDATE attribute_options SET type_id = $registration->type_id, name = '$registration->name', created_at = '$registration->created_at', updated_at = '$registration->updated_at' WHERE id = $registration->id";
        DB::execute_query($query);
    }

    //Traz todos os atributos cadastrados no banco de dados
    public function findAll(): Array{
        
        //Executa a busca no banco
        $query = "SELECT attribute_options.id as id,
                        attributes.name as type_id,
                        attribute_options.name as name,
                        attribute_options.created_at as created_at,
                        attribute_options.updated_at as updated_at
                    FROM attribute_options,
                        attributes
                    WHERE attribute_options.type_id = attributes.id
                    ORDER BY type_id ASC";
        $results = DB::execute_query($query);

        //Se não encontrou nenhum registro com o id informado, volta null
        if(count($results) === 0){
            return null;
        }

        //Array de resposta
        $records = [];

        foreach($results as $row){
            //Cria um objeto Registration
            $registration = new Registration();

            //Popula o objeto order com os dados que vieram do banco de dados
            $registration->id = $row['id'];
            $registration->type_id = $row['type_id'];
            $registration->name = $row['name'];
            $registration->created_at = $row['created_at'];
            $registration->updated_at = $row['updated_at'];

            //Retorna o objeto do tipo pedido com os dados populados
            $records[] = $registration;
        }

        //Retorna a lista com todos os registros encontrados no banco
        return $records;
    }

    //Obtem um pedido pelo ID o banco de dados
    public function findByID(string $id)//:Order|null
    {
        //Executa a busca no banco
        $query = "SELECT * FROM attribute_options WHERE id = $id";
        $result = DB::execute_query($query);

        //Se não encontrou nenhum registro com o id informado, volta null
        if(count($result) === 0){
            return null;
        }

        //Se encontrou o registro, pega o primeiro item
        [$row] = $result;

        //Cria o objeto Registration
        $registration = new Registration();

        //Popula o objeto Registration com os dados que vieram do banco de dados
        $registration->id = $row['id'];
        $registration->type_id = $row['type_id'];
        $registration->name = $row['name'];
        $registration->created_at = $row['created_at'];
        $registration->updated_at = $row['updated_at'];
        $registration->name_product = $row['name_product'];

        //Retorna o objeto do tipo registro com os dados populados
        return $registration;
    }

    //Deleta um registro de pedido no banco de dados
    public function delete(string $id){

        $query = "DELETE FROM attribute_options WHERE id = $id";
        DB::execute_query($query);
    }
}