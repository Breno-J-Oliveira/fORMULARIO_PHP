<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Ingresso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container" class="forms">
            <h1>Formulário de Ingresso</h1>

    <form method="POST">
        <p><label for="nome">Nome:</label></p>
        <input type="text" name="nome" id="nome" placeholder="Insira seu nome aqui" required>

        <p><label for="idade">Idade:</label></p>
        <input type="number" name="idade" id="idade" placeholder="Insira sua idade aqui" required>

        <p><label for="cliente">Tipo de ingresso:</label></p>
        <select name="cliente" id="cliente" required>
            <option value="">Selecione aqui</option>
            <option value="Vip">Vip</option>
            <option value="Regular">Comum</option>
            <option value="Outros">Outros</option>
        </select>

        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $cliente = $_POST["cliente"];

        echo "<h2>Bem-vindo, $nome!</h2>";

        // Verificação de idade
        if ($idade < 18) {
            echo "<p>Você tem menos de 18 anos e não pode comprar o ingresso.</p>";
        } else {
            echo "<p>Você escolheu o ingresso <strong>$cliente</strong>,E seu ingresso já foi reservado</p>";;
        }
    }
    ?>
    </div>

     <video autoplay muted loop>
        <source src="img/VIDEOFUNDO.mp4" type="video/mp4">
    </video>
</body>
</html>
