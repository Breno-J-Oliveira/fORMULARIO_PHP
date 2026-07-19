<?php

// pede a idade pro usuario
$IDADE =18;

// converte pra numero
$IDADE = (int)$IDADE;

echo "\n";

// verifica se a idade é 60 e 60 (exemplo usando &&)
if ($IDADE == 60 && $IDADE == 60) {
    // codigo sera executado se ambas as condicoes forem verdadeiras
    echo 'TEM 60 E 60 ' . $IDADE . "\n";
}

// se for diferente de 60
if ($IDADE != 60) {
    echo '(NAO E 60) ' . $IDADE . "\n";
}

?>
