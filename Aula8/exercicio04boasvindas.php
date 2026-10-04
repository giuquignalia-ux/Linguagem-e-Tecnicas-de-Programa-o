<?php

session_start();

// Recupera o nome armazenado na sessão
$nome = $_SESSION['nome'];

// Exibe a mensagem
echo "<h2>Seja bem-vindo(a), $nome!</h2>";

?>