<?php 
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM meusjogos WHERE id=$id";
    $result = $conn->query($sql);
    $jogo = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id']; 
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $plataforma = $_POST['plataforma'];
    $ano = $_POST['ano_lancamento'];
    $preco = $_POST['preco'];
    $nota = $_POST['nota'];

    $sql = "UPDATE meusjogos SET 
        nome='$nome', 
        genero='$genero', 
        plataforma='$plataforma', 
        ano_lancamento='$ano', 
        preco='$preco', 
        nota='$nota' 
        WHERE id=$id";

    if ($conn->query($sql) === TRUE){
        header("Location: index.php");
        exit;
    } else {
        echo "ERRO: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Editar Jogo</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Editar Jogo</h1>

<form method="POST">
<input type="hidden" name="id" value="<?php echo $jogo['id']; ?>">

<label>Nome:</label>
<input type="text" name="nome" value="<?php echo $jogo['nome']; ?>" required>

<label>Gênero:</label>
<input type="text" name="genero" value="<?php echo $jogo['genero']; ?>" required>

<label>Plataforma:</label>
<input type="text" name="plataforma" value="<?php echo $jogo['plataforma']; ?>" required>

<label>Ano de lançamento:</label>
<input type="number" name="ano_lancamento" value="<?php echo $jogo['ano_lancamento']; ?>" required>

<label>Preço:</label>
<input type="number" name="preco" step="0.01" value="<?php echo $jogo['preco']; ?>" required>

<label>Nota:</label>
<input type="number" name="nota" min="0" max="10" step="0.1" value="<?php echo $jogo['nota']; ?>" required>

<input type="submit" value="Atualizar Jogo">
</form>

</body>
</html>
