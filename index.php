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
            'nome'  => 'Game',
            'preco' => 99.90
        ];
        
        cadastrar('produto', $attributes);
    ?>
</body>
</html>