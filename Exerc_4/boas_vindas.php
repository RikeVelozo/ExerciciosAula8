<?php
session_start();

$nomeSalvo = $_SESSION["usuario_nome"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
</head>
<body>
    <h1>Bem vindo, <?php echo $nomeSalvo;?></h1>
    <p>Sua sessão foi iniciada com sucesso</p>
</body>
</html>