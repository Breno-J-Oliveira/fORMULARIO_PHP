<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Verifique seu desconto:</h1>

<form method="POST">
  <p>
    Selecione o seu tipo de cliente:
    <select name="cliente" required>
      <option value="">Selecione aqui</option>
      <option value="Vip">Vip</option>
      <option value="Regular">Regular</option>
      <option value="Outros">Outros</option>
    </select>
    <button type="submit">Verifique seu desconto</button>
  </p>
</form>

<?php
// verifica se o formulario foi enviado
if ($_POST["cliente"] && $_POST["cliente"] != "") {
    $cliente = $_POST["cliente"];
    echo "<p>Você é um  $cliente portanto seu desconto e de:</p>";

    // você pode fazer ações diferentes dependendo da escolha

    switch ($cliente) {
        case "Vip":
            echo "<p>Desconto de 20%</p>";
            break;
        case "Regular":
            echo "<p>Desconto de 10%</p>";
            break;
        case "Outros":
            echo "<p>Sem desconto</p>";
            break;
        default:
            echo "<p>Tipo de Cliente não identificado</p>";
    }
}
?>
    
</body>
</html>