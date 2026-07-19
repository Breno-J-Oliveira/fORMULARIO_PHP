<?php
include 'conexao.php';
echo "conectado corretamente<br>";

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $plataforma = $_POST['plataforma'];
    $ano = $_POST['ano_lancamento'];
    $preco = $_POST['preco'];
    $nota = $_POST['nota'];

    $sql = "INSERT INTO meusjogos (nome, genero, plataforma, ano_lancamento, preco, nota) 
            VALUES ('$nome', '$genero', '$plataforma', '$ano', '$preco', '$nota')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao inserir: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jogos que já joguei</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Jogos que já joguei</h1>

<form action="" method="POST">

    <label>Nome do Jogo:</label>
    <input type="text" name="nome" required>

    <label>Gênero:</label>
    <select name="genero" required>
        <option value="Ação">Ação</option>
        <option value="Aventura">Aventura</option>
        <option value="RPG">RPG</option>
        <option value="FPS">FPS</option>
        <option value="Corrida">Corrida</option>
        <option value="Terror">Terror</option>
        <option value="Puzzle">Puzzle</option>
        <option value="Indie">Indie</option>
    </select>

    <label>Plataforma:</label>
    <input type="text" name="plataforma" placeholder="PC, PS4, Xbox..." required>

    <label>Ano de Lançamento:</label>
    <input type="number" name="ano_lancamento" min="1980" max="2099" required>

    <label>Preço Pago:</label>
    <input type="number" name="preco" step="0.01" required>

    <label>Nota (0 a 10):</label>
    <input type="number" name="nota" min="0" max="10" step="0.1" required>

    <input type="submit" value="Adicionar Jogo">
</form>

<h2>Lista de Jogos</h2>
<div id="usuarios">
    <?php include 'read.php'; ?>
</div>

</body>
</html>
