<?php
include 'conexao.php';

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
