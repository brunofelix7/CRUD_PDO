<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso PDO</title>
</head>
<body>
    <?php
        $attributes = [
            'nome'  => 'Battlefield 1',
            'preco' => 99.90
        ];
        
        atualizar(1, 'produto', $attributes);
         
    ?>
</body>
</html>