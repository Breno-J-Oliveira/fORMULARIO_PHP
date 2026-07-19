<?php
$servername = "localhost";
$username = "root";
$password = "Senai@118";
$dbname = "bolos";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) { die("Erro na conexão: " . $conn->connect_error); }

$sql = "CREATE TABLE IF NOT EXISTS bolos (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(255),
    sabor VARCHAR(255),
    Origem VARCHAR(255),
    Nota VARCHAR(255),
    Imagem VARCHAR(255)
)";
$conn->query($sql);

if (!is_dir("uploads")) {
    mkdir("uploads", 0777, true);
}

if (isset($_GET['excluir'])) {
    $id = $_GET['excluir'];
    $registro = $conn->query("SELECT Imagem FROM bolos WHERE Id=$id")->fetch_assoc();
    if ($registro["Imagem"] && file_exists($registro["Imagem"])) unlink($registro["Imagem"]);
    $conn->query("DELETE FROM bolos WHERE Id = $id");
    header("Location: index.php");
    exit;
}

$editando = false;
$editId = $editNome = $editSabor = $editOrigem = $editNota = $editImagem = "";

if (isset($_GET['editar'])) {
    $editando = true;
    $id = $_GET['editar'];
    $dados = $conn->query("SELECT * FROM bolos WHERE Id = $id")->fetch_assoc();
    $editId = $dados["Id"];
    $editNome = $dados["Nome"];
    $editSabor = $dados["sabor"];
    $editOrigem = $dados["Origem"];
    $editNota = $dados["Nota"];
    $editImagem = $dados["Imagem"];
}

function salvarImagem($nomeCampo){
    if($_FILES[$nomeCampo]["name"] != ""){
        $caminho = "uploads/" . time() . "_" . $_FILES[$nomeCampo]["name"];
        move_uploaded_file($_FILES[$nomeCampo]["tmp_name"], $caminho);
        return $caminho;
    }
    return null;
}

if (isset($_POST["atualizar"])) {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $sabor = $_POST["sabor"];
    $origem = $_POST["origem"];
    $nota = $_POST["nota"];
    $novaImagem = salvarImagem("imagem");

    if ($novaImagem) {
        $conn->query("UPDATE bolos SET Nome='$nome', sabor='$sabor', Origem='$origem', Nota='$nota', Imagem='$novaImagem' WHERE Id=$id");
    } else {
        $conn->query("UPDATE bolos SET Nome='$nome', sabor='$sabor', Origem='$origem', Nota='$nota' WHERE Id=$id");
    }
    header("Location: index.php");
    exit;
}

if (isset($_POST["salvar"])) {
    $nome = $_POST["nome"];
    $sabor = $_POST["sabor"];
    $origem = $_POST["origem"];
    $nota = $_POST["nota"];
    $imagem = salvarImagem("imagem");

    $conn->query("INSERT INTO bolos (Nome, sabor, Origem, Nota, Imagem) VALUES ('$nome', '$sabor', '$origem', '$nota', '$imagem')");
}
?>

<link rel="stylesheet" href="style.css">

<h1><?php echo $editando ? "Editar Bolo" : "Cadastro de Bolos"; ?></h1>

<form method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $editId; ?>">

    <label>Nome:</label>
    <input type="text" name="nome" value="<?php echo $editNome; ?>" required>

    <label>Sabor:</label>
    <input type="text" name="sabor" value="<?php echo $editSabor; ?>" required>

    <label>Origem:</label>
    <input type="text" name="origem" value="<?php echo $editOrigem; ?>" required>

    <label>Nota (0 a 10):</label>
    <input type="text" name="nota" value="<?php echo $editNota; ?>" required>

    <label>Imagem do Bolo:</label>
    <input type="file" name="imagem">

    <?php if ($editImagem): ?>
        <img src="<?php echo $editImagem; ?>" width="120" style="margin-top: 8px;">
    <?php endif; ?>

    <?php echo $editando ? '<input type="submit" name="atualizar" value="Salvar">' : '<input type="submit" name="salvar" value="Cadastrar">'; ?>
</form>

<hr>

<h2>Bolos cadastrados</h2>
<table border="1">
<tr><th>ID</th><th>Imagem</th><th>Nome</th><th>Sabor</th><th>Origem</th><th>Nota</th><th>Ações</th></tr>

<?php
$result = $conn->query("SELECT * FROM bolos");
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['Id']}</td>
        <td><img src='{$row['Imagem']}' width='80'></td>
        <td>{$row['Nome']}</td>
        <td>{$row['sabor']}</td>
        <td>{$row['Origem']}</td>
        <td>{$row['Nota']}</td>
        <td>
            <a href='index.php?editar={$row['Id']}'>Editar</a> |
            <a href='index.php?excluir={$row['Id']}' onclick='return confirm(\"Excluir bolo?\")'>Excluir</a>
        </td>
    </tr>";
}
?>
</table>
