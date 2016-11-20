<?php

    function conectar(){
        $pdo = new PDO('mysql:dbhost=localhost;dbname=loja', 'root', 'Oni@2015');
        return $pdo;
    }
    