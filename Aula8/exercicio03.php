<?php

// Recebe os dados
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

// Verifica os tipos
echo "<h3>Tipos dos valores:</h3>";

var_dump($numero1);

echo "<br>";

var_dump($numero2);

echo "<br><br>";

// Calcula a soma
$soma = $numero1 + $numero2;

// Mostra o resultado usando print
print "A soma é: " . $soma;

?>