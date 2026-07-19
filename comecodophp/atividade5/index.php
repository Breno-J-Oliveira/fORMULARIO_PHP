<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Frete</title>
</head>
<body>
    <h1>Calculo de frete:</h1>

<form method="POST">
  <p>
    Selecione seu estado:
    <select name="estado" required>
      <option value="">Selecione aqui</option>
      <option value="SP">São Paulo</option>
      <option value="SC">Santa Catarina</option>
      <option value="ES">Espírito Santo</option>
      <option value="BA">Bahia</option>
      <option value="AC">Acre</option>
      <option value="MG">Minas Gerais</option>
      <option value="PB">Paraíba</option>
      <option value="AM">Amazonas</option>
      <option value="PA">Pará</option>
      <option value="MS">Mato Grosso do Sul</option>
    </select>
    <button type="submit">Verifique seu frete</button>
  </p>
</form>

<?php
// verifica se o formulário foi enviado
if (isset($_POST["estado"]) && $_POST["estado"] != "") {
    $estado = $_POST["estado"];
    echo "<p>Você mora em <strong>$estado</strong>, portanto seu frete é de:</p>";

    switch ($estado) {
        case "SP":
            echo "<p>O valor do frete para o seu Estado é de R$:19</p>";
            break;
        case "SC":
            echo "<p>O valor do frete para o seu Estado é de R$:30</p>";
            break;
        case "ES":
            echo "<p>O valor do frete para o seu Estado é de R$:69</p>";
            break;
        case "BA":
            echo "<p>O valor do frete para o seu Estado é de R$:22</p>";
            break;
        case "AC":
            echo "<p>O valor do frete para o seu Estado é de R$:44</p>";
            break;
        case "MG":
            echo "<p>O valor do frete para o seu Estado é de R$:32</p>";
            break;
        case "PB":
            echo "<p>O valor do frete para o seu Estado é de R$:42</p>";
            break;
        case "AM":
            echo "<p>O valor do frete para o seu Estado é de R$:32</p>";
            break;
        case "PA":
            echo "<p>O valor do frete para o seu Estado é de R$:23</p>";
            break;
        case "MS":
            echo "<p>O valor do frete para o seu Estado é de R$:33</p>";
            break;
        default:
            echo "<p>Tipo de estado não identificado</p>";
    }
}
?>
    
</body>
</html>
