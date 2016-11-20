<?php

    function listar($table){
        
        $conn = conectar();
        
        $listar = $conn->query("SELECT * FROM $tabela");
        $listar->execute();
        return $listar->fetchAll(PDO::FETCH_OBJ);
        
    }
