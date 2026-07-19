<?php
$IDADE = 18;
$IDADE = (int)$IDADE;

echo "\n";

// verifica se a idade e diferente de 18
if ($IDADE != 18) {
    // codigo sera executado se a idade for diferente de 18
    echo '(NAO E 18) ' . $IDADE . "\n";
}

// se for exatamente 18
if ($IDADE == 18) {
    // codigo sera executado se for igual a 18
    echo '(E 18 MESMO) ' . $IDADE . "\n";
}

?>
