<?php

class AttributeOptionDAO
{
    public function findById(string $id)
    {
        //Executa a busca no banco
        $query = "SELECT * FROM attribute_options WHERE id = $id";
        $results = DB::execute_query($query);

        //Se não encontrou nenhum registro com o id informado, volta null
        if(count($results) === 0){
            return null;
        }

        //Se encontrou o registro, pega o primeiro item
        [$row] = $results;//mesma coisa que "$row = $result[0];"


        //Cria um objeto Attribute
        $attributeOption = new AttributeOption();

        //Popular o objeto order com os dados que vieram do banco de dados
        $attributeOption->id = $row['id'];
        $attributeOption->type_id = $row['type_id'];
        $attributeOption->name = $row['name'];
        $attributeOption->created_at = $row['created_at'];
        $attributeOption->updated_at = $row['updated_at'];

        return $attributeOption;
    }


    //Obtem todas as comandas do banco de dados
    public function findByTypeId(string $type_id): array
    {
        //Executa a busca no banco
        $query = "SELECT * FROM attribute_options WHERE type_id = $type_id";
        $results = DB::execute_query($query);

        //Se não encontrou nenhum registro com o id informado, volta null
        if (count($results) === 0) {
            return [];
        }

        //Array de resposta
        $attributes = [];

        foreach ($results as $row) {
            //Cria um objeto Attribute
            $attributeOption = new AttributeOption();

            //Popular o objeto order com os dados que vieram do banco de dados
            $attributeOption->id = $row['id'];
            $attributeOption->type_id = $row['type_id'];
            $attributeOption->name = $row['name'];
            $attributeOption->created_at = $row['created_at'];
            $attributeOption->updated_at = $row['updated_at'];

            //Retorna o objeto do tipo atributo com os dados populados
            $attributes[] = $attributeOption;
        }

        //Retorna a lista com todos os registros encontrados no banco
        return $attributes;
    }
}
