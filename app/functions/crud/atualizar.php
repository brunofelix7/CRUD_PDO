<?php

    function atualizar($id, $table, Array $attributes){
        
        # Recupera a conexão
        $conn = conectar();
        
        # Inicia variável que será usada no looping
        $values = null;
        
        # Preciso dizer que um campo é igual ao outro (nome=:nome)
        foreach($attributes as $key => $value){
            $values.= $key .'= :' .$key.',';
        }
        
        # Remove a última vírgula
        $values = (rtrim($values, ','));

        # Prepara a expressão SQL
        $atualizar = $conn->prepare("UPDATE $table SET $values WHERE id=:id");
        
        # Insere o id dentro do array, ou seja, do valor que será atualizada
        $attributes['id'] = $id;
        
        # Executa a expressão SQL
        $atualizar->execute($attributes);
        
        # Retorna true
        return $atualizar;
    }
