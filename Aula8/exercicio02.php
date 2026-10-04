<?php

// Recebe os dados
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];

// Mostra os dados
echo "<h2>Dados recebidos:</h2>";

echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>Cidade:</strong> $cidade</p>";

// Verifica a cidade
if (strtolower($cidade) == "curitiba") {

    echo "<h3>Curitibano!</h3>";

}

?>