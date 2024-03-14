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
    <section class="cadastro">
        <form method="POST" action="destino.php">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" class="nome" placeholder="Informe seu nome">
            <br>
            <label for="telefone">Telefone: </label>
            <input type="text" name="telefone" class="telefone" placeholder="(99) 9999-9999">
            <br>
            <label for="email">E-mail: </label>
            <input type="text" name="email" class="email" placeholder="seuemail@email.com.br">
            <br>
            <label for="mensagem">Mensagem: </label>
            <textarea name="mensagem" class="mensagem" placeholder="Qual sua mensagem"></textarea>
            <br>
            <br>
            <button type="submit" name="botao" class="botao">Enviar</button>
        </form>
    </section>
    <p>REQUEST na URL</p>
    <br>
    <div class="request">
        <a
            href="destino.php?nome=Ana+Gabriela+Lima&fone=(47)9999-9999&email=seuemail@email.com.br">destino.php?nome=Ana+Gabriela+Lima&fone=(47)9999-9999&email=seuemail@email.com.br</a>
    </div>
</body>

</html>
