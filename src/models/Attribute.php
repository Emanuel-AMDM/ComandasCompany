<?php

class Attribute{

    /**
     * Id do atributo no banco de dados
     */
    public $id;

    /**
     * Nome do atributo no banco de dados
     */
    public $name;

    /**
     * Opções de configuração do atributo
     */
    public $attribute_options = [];

    /**
     * Data que o registro foi criado
     */
    public $created_at;

    /**
     * Data que o registro foi atualizado
     */
    public $updated_at;
}