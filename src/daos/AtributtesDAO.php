<?php

class AtributtesDAO{

    public function findAll(){
        
        $query = "SELECT * FROM attributes";
        $db_results = DB::execute_query($query);

        // Se a tabela esta vazia no banco de dados, retorno um array vazio
        if (count($db_results) === 0) {
            return [];
        }

        $atributtesOptionsDAO = new AtributtesOptionsDAO();

        //Array de resposta
        $results = [];

        foreach ($db_results as $db_row) {
            //Cria um objeto Atributte
            $atributte = new Atributtes();

            //Popular o objeto order com os dados que vieram do banco de dados
            $atributte->id = $db_row['id'];
            $atributte->name = $db_row['name'];
            $atributte->created_at = $db_row['created_at'];
            $atributte->updated_at = $db_row['updated_at'];

            // Obtem as opções de atributo para popular o objeto
            $options = $atributtesOptionsDAO->findByTypeId($atributte->id);
            $atributte->atributte_options = $options;

            //Retorna o objeto do tipo atributo com os dados populados
            $results[] = $atributte;
        }

        //Retorna a lista com todos os registros encontrados no banco
        return $results;
    }
}