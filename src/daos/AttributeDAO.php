<?php

class AttributeDAO{

    public function findAll(){
        
        $query = "SELECT * FROM attributes";
        $db_results = DB::execute_query($query);

        // Se a tabela esta vazia no banco de dados, retorno um array vazio
        if (count($db_results) === 0) {
            return [];
        }

        $attributeOptionDAO = new AttributeOptionDAO();

        //Array de resposta
        $results = [];

        foreach ($db_results as $db_row) {
            //Cria um objeto Attribute
            $attribute = new Attribute();

            //Popular o objeto order com os dados que vieram do banco de dados
            $attribute->id = $db_row['id'];
            $attribute->name = $db_row['name'];
            $attribute->created_at = $db_row['created_at'];
            $attribute->updated_at = $db_row['updated_at'];

            // Obtem as opções de atributo para popular o objeto
            $options = $attributeOptionDAO->findByTypeId($attribute->id);
            $attribute->attribute_options = $options;

            //Retorna o objeto do tipo atributo com os dados populados
            $results[] = $attribute;
        }

        //Retorna a lista com todos os registros encontrados no banco
        return $results;
    }
}