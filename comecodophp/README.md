# 🖥️ Atividades de PHP - SENAI

<p align="center"> 
  <img src="https://img.shields.io/badge/status-concluído-green?style=for-the-badge" alt="Status do Projeto"> 
  <img src="https://img.shields.io/badge/versão-1.0-blue?style=for-the-badge" alt="Versão"> 
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP"> 
</p>

---

## 📑 Índice  

1. [Sobre as Atividades](#-sobre-as-atividades)  
2. [Descrição das Atividades](#-descrição-das-atividades)  
3. [Funcionalidades](#-funcionalidades)  
4. [Tecnologias Utilizadas](#-tecnologias-utilizadas)  
5. [Conclusão](#-conclusão)  
6. [Contatos](#-contatos)  

---

## 🎯 Sobre as Atividades  

Essas atividades foram desenvolvidas individualmente por **Breno J. Oliveira**, como parte dos estudos de **PHP** no SENAI.  
O objetivo foi **aprender a lógica do PHP**, manipulação de variáveis, formulários, condicionais e interação com o usuário — conceitos fundamentais no desenvolvimento backend.

---

## 🧩 Descrição das Atividades  

### 🧠 Atividade 1 — Variáveis Variáveis  

```php
<?php
$nome = 'raul';
$raul = 'mago';

echo 'hello '. $$nome;
?>
```
Explicação:
Essa atividade ensina o conceito de variáveis variáveis em PHP.
A variável $nome contém o texto "raul", e $$nome acessa o valor de $raul, que é "mago".
✅ Resultado exibido na tela:

hello mago

<div class="mensagem">
    <?php
    $nome = 'raul';
    $raul = 'mago';

    echo 'ola '. $$nome;
    ?>
</div>

Explicação:
Aqui foi feita a integração entre PHP e HTML.
A estrutura HTML é usada para formatar a página, enquanto o PHP insere conteúdo dinâmico dentro dela.
✅ Resultado exibido na tela:

ola mago

👋 Atividade 3 — Formulário de Nome com POST

<form method="POST">
    <input type="text" name="nome" placeholder="Insira seu nome aqui" required>
</form>

<?php
if ($_POST["nome"]) {
    $nome = $_POST['nome'];
    echo "<h2>Bem-vindo, $nome!</h2>";
}
?>

Explicação:
Essa atividade demonstra como o PHP recebe dados de um formulário via método POST.
O usuário insere seu nome e o site responde dinamicamente com uma mensagem personalizada.
✅ Exemplo de saída:

Bem-vindo, Breno!

⚖️ Atividade 4 — Testes com Condicionais e Operadores

Código: (não exibido completo, pois foram realizados diversos testes com if, else, >, <, ==, != etc.)

Explicação:
Essa atividade teve o objetivo de explorar operadores lógicos e relacionais, como:

> maior que

< menor que

== igual a

!= diferente de

>= maior ou igual

<= menor ou igual

! negação

Esses testes foram feitos para entender como o PHP avalia condições e toma decisões dentro do código.

🚚 Atividade 5 — Cálculo de Frete por Estado

<form method="POST">
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
</form>

<?php
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
        // ... demais estados
    }
}
?>

Explicação:
Essa foi uma das atividades mais completas, usando:

Formulários HTML

Estrutura de decisão switch/case

Saída de dados dinâmica

O usuário seleciona um estado, e o PHP exibe o valor do frete correspondente.
✅ Exemplo de saída:

Você mora em SP, portanto seu frete é de R$:19

⚙️ Funcionalidades

Manipulação de variáveis e variáveis variáveis

Recebimento de dados de formulários HTML com POST

Uso de condicionais (if, else, switch)

Comparações e operadores lógicos

Exibição dinâmica de mensagens e resultados

Integração entre frontend (HTML) e backend (PHP)

🛠 Tecnologias Utilizadas
<p align="center"> <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP"> <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5"> <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3"> <img src="https://img.shields.io/badge/VSCode-007ACC?style=for-the-badge&logo=visualstudiocode&logoColor=white" alt="VS Code"> </p>
🏆 Conclusão

Essas atividades foram fundamentais para compreender o funcionamento do PHP e sua integração com HTML, explorando desde conceitos básicos como variáveis até estruturas lógicas mais complexas.
Elas serviram como base para desenvolver raciocínio lógico, organização e autonomia no código.

👤 Contatos
<p align="center"> <a href="https://github.com/Breno-J-Oliveira" target="_blank"> <img src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white" alt="GitHub"> </a> <a href="https://www.linkedin.com/in/breno-j-oliveira-672619352/" target="_blank"> <img src="https://img.shields.io/badge/LinkedIn-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white" alt="LinkedIn"> </a> <a href="https://www.instagram.com/brenot300" target="_blank"> <img src="https://img.shields.io/badge/Instagram-E4405F?style=for-the-badge&logo=instagram&logoColor=white" alt="Instagram"> </a> <a href="https://x.com/BrenoJOliveira_" target="_blank"> <img src="https://img.shields.io/badge/X-1DA1F2?style=for-the-badge&logo=x&logoColor=white" alt="X"> </a> </p> ```
