<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 1 - Revisão PHP - Métodos HTTP</title>
</head>
<body>
    <h1>Exercício 1 - Revisão PHP - Métodos HTTP</h1>
    <pre><?php var_dump($_REQUEST); ?></pre>
    <pre><?php 
        echo $_SERVER["REQUEST_METHOD"];
        echo "<br>"; 
        var_export(apache_request_headers());
    ?></pre>
    <a class="botao" href="index.php">Voltar</a>
</body>
</html>