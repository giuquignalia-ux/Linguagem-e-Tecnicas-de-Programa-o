<?php

session_start();

// Recebe o nome
$nome = $_POST['nome'];

// Armazena o nome na sessão
$_SESSION['nome'] = $nome;

// Vai para a página de boas-vindas
header("Location: exercicio04boasvindas.php");

?>