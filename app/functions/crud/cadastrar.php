<?php

    function cadastrar($table, Array $attributes){
        
        # Recupera a minha conexão
        $conn = conectar();
        
        # Recupera os índices do array, que são os nomes dos campos da tabela
        $keys = array_keys($attributes);
        
        # O implode junta uma string qualquer entre cada elemento de um array
        # Os nomes dos campos da tabela em forma de string
        $camposTabela = implode(',', $keys);
     
        # Inicia variável que será usada no looping
        $values = null;
        
        # Looping para recuperar os valores a serem inseridos, e colocar os (:) na frente de cada um deles
        foreach($keys as $key){
            $values .=', :'.$key;
        }
        
        # Remove os espaços em branco e a primeira vírcula da string
        $values = (trim(ltrim($values, ',')));
        
        # Prepara a expressão SQL
        $cadastrar = $conn->prepare("INSERT INTO $table($camposTabela) VALUES($values)");
        
        # Executa a expressão SQL
        $cadastrar->execute($attributes);
        
        # Retorna a última id cadastrado
        return $conn->lastInsertId();
        
    }
    
    