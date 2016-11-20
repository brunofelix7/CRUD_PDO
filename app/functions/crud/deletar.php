<?php

    function deletar($campo, $id, $table){
        
        $conn = conectar();
        
        $deletar = $conn->prepare("DELETE FROM $table WHERE $campo =:id");
        $deletar->bindValue(":id", $id);
        $deletar->execute();
        
        return $deletar;
    }
    