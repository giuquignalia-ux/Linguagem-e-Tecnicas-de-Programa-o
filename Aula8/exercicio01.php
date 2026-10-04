<?php

// Recebe os dados
$nome = $_GET['nome'];
$cidade = $_GET['cidade'];

// Mostra os dados
echo "<h2>Dados recebidos:</h2>";

echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>Cidade:</strong> $cidade</p>";

?>