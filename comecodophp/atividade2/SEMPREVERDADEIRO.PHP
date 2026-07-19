<?php

// pede a idade pro usuario
$IDADE = readline("Digite sua idade: ");

// converte pra numero
$IDADE = (int)$IDADE;

echo "\n";

// exemplo do if com ||
if ($IDADE || 0) {
    // esse if sempre sera verdadeiro, porque qualquer numero diferente de 0 é true
    echo 'ESSE IF SEMPRE É VERDADEIRO (IDADE OU 0) -> ' . $IDADE . "\n";
}

// pra mostrar quando seria falso, usamos o contrario
if (!$IDADE) {
    // so executa se a idade for 0
    echo 'A IDADE E 0 -> ' . $IDADE . "\n";
}

?>
