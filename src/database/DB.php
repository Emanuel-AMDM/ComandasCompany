<?php

class DB
{
    static function execute_query($sql)
    {
        // Cria uma conexão com o banco de dados
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        // Atira um erro e para a execucao da funcao se nao for possivel abrir uma conexao
        if ($conn->connect_error) {
            throw new Exception("Erro na conexão: " . $conn->connect_error);
        }

        // Executa a query
        $result = $conn->query($sql);

        //verifica se reult é booleano, usado quando é executado insert, delete, update
        if (is_bool($result)) {
            if (!$result) {
                throw new Exception(sprintf("Error message: %s", $conn->error));
            }

            return $conn->insert_id;
        }

        // Verifica se a consulta retornou resultados
        if ($result->num_rows === 0) {
            return [];
        }

        // Array para agrupar os dados
        $data = [];

        // Percorre todas as linhas da resposta e agrupa elas dentro da variavel $data
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        // Fecha a conexão com o banco de dados quando terminar
        $conn->close();

        // Retorna os dados encontrados
        return $data;
    }
}