<?php

class AtributtesOptionsDAO{
    
    //Obtem todas as comandas do banco de dados
    public function findByTypeId(): Array{
        //Executa a busca no banco
        $query = "SELECT * FROM atributtes_options WHERE type_id = 1";
        $results = DB::execute_query($query);

        //Se não encontrou nenhum registro com o id informado, volta null
        if(count($results) === 0){
            return[];
        }

        //Array de resposta
        $sector = [];

        foreach($results as $row){
            //Cria um objeto Atributte
            $atributtesOptions = new AtributtesOptions();

            //Popular o objeto order com os dados que vieram do banco de dados
            $atributtesOptions->id = $row['id'];
            $atributtesOptions->type_id = $row['type_id'];
            $atributtesOptions->name = $row['name'];
            $atributtesOptions->created_at = $row['created_at'];
            $atributtesOptions->updated_at = $row['updated_at'];

            //Retorna o objeto do tipo atributo com os dados populados
            $sector[] = $atributtesOptions;
        }

        //Retorna a lista com todos os registros encontrados no banco
        return $sector;

        //Executa a busca no banco
        $query = "SELECT * FROM atributtes_options WHERE type_id = 2";
        $results = DB::execute_query($query);

        //Se não encontrou nenhum registro com o id informado, volta null
        if(count($results) === 0){
            return[];
        }

        //Array de resposta
        $brand = [];

        foreach($results as $row){
            //Cria um objeto Atributte
            $atributtesOptions = new AtributtesOptions();

            //Popular o objeto order com os dados que vieram do banco de dados
            $atributtesOptions->id = $row['id'];
            $atributtesOptions->type_id = $row['type_id'];
            $atributtesOptions->name = $row['name'];
            $atributtesOptions->created_at = $row['created_at'];
            $atributtesOptions->updated_at = $row['updated_at'];

            //Retorna o objeto do tipo atributo com os dados populados
            $brand[] = $atributtesOptions;
        }

        //Retorna a lista com todos os registros encontrados no banco
        return $brand;
    }
}