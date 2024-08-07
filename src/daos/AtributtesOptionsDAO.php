<?php

class AtributtesOptionsDAO
{
    public function findById(string $id)
    {
        //Executa a busca no banco
        $query = "SELECT * FROM atributtes_options WHERE id = $id";
        $results = DB::execute_query($query);

        //Se não encontrou nenhum registro com o id informado, volta null
        if(count($results) === 0){
            return null;
        }

        //Se encontrou o registro, pega o primeiro item
        [$row] = $results;//mesma coisa que "$row = $result[0];"


        //Cria um objeto Atributte
        $atributtesOptions = new AtributtesOptions();

        //Popular o objeto order com os dados que vieram do banco de dados
        $atributtesOptions->id = $row['id'];
        $atributtesOptions->type_id = $row['type_id'];
        $atributtesOptions->name = $row['name'];
        $atributtesOptions->created_at = $row['created_at'];
        $atributtesOptions->updated_at = $row['updated_at'];

        return $atributtesOptions;
    }


    //Obtem todas as comandas do banco de dados
    public function findByTypeId(string $type_id): array
    {
        //Executa a busca no banco
        $query = "SELECT * FROM atributtes_options WHERE type_id = $type_id";
        $results = DB::execute_query($query);

        //Se não encontrou nenhum registro com o id informado, volta null
        if (count($results) === 0) {
            return [];
        }

        //Array de resposta
        $atributtes = [];

        foreach ($results as $row) {
            //Cria um objeto Atributte
            $atributtesOptions = new AtributtesOptions();

            //Popular o objeto order com os dados que vieram do banco de dados
            $atributtesOptions->id = $row['id'];
            $atributtesOptions->type_id = $row['type_id'];
            $atributtesOptions->name = $row['name'];
            $atributtesOptions->created_at = $row['created_at'];
            $atributtesOptions->updated_at = $row['updated_at'];

            //Retorna o objeto do tipo atributo com os dados populados
            $atributtes[] = $atributtesOptions;
        }

        //Retorna a lista com todos os registros encontrados no banco
        return $atributtes;
    }
}
