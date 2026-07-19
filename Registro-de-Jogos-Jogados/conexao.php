<?php

// Definir o enddreço d servidor onde o MySQL está sendo executado
$servername = "localhost";
// Nome do usuário do banco de dados MySQL  
$username = "root";
// Senha do usuário do banco de dados MySQ
$password = "Senai@118";
//Nome do banco de dados que sera usado na conexao
$dbname = "jogos1";

$conn = new mysqli ($servername,$username,$password,$dbname);

if ($conn->connect_error){
    echo "erro de conexao".
    $conn->connect_error;

}else{
        echo "conectado corretamente";
}
?>