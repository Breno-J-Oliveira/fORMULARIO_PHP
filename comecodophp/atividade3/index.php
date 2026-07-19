<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Digite seu nome:</h1>
    <form method="POST">

    <!-- o name é o nome da variavel que vai ser enviada  para p servidor-->
    <input type="text" name="nome" placeholder="Insira seu nome aqui" require>
    <button type="submit">Enviar</button>
    </form>


    <?php
    // Verifica se o formulário foi enviado
    if ($_POST["nome"]) {
        // Coleta o valor do campo 'nome' do formulário
        $nome = $_POST['nome'];
        
        // Exibe uma mensagem de boas-vindas
        echo "<h2>Bem-vindo, $nome!</h2>";
    }
    ?>

    
</body>
</html>