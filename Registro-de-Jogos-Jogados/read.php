<?php
include 'conexao.php';

$sql = "SELECT * FROM meusjogos ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Gênero</th>
            <th>Plataforma</th>
            <th>Ano</th>
            <th>Preço Pago</th>
            <th>Nota</th>
            <th>Ações</th>
        </tr>";

    while ($row = $result->fetch_assoc()) {

        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nome']}</td>
            <td>{$row['genero']}</td>
            <td>{$row['plataforma']}</td>
            <td>{$row['ano_lancamento']}</td>
            <td>R$ {$row['preco']}</td>
            <td>{$row['nota']}</td>

            <td>
                <a href='update.php?id={$row['id']}'>Editar</a> | 
                <a href='delete.php?id={$row['id']}' onclick=\"return confirm('Tem certeza que deseja excluir?');\">Excluir</a>
            </td>
        </tr>";
    }

    echo "</table>";

} else {
    echo "<p>Nenhum jogo cadastrado ainda.</p>";
}

$conn->close();
?>
