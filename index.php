<?php

require 'Orcamento.php';
require 'CalculadoraDeImpostos.php';
require 'Imposto.php';
require 'ICMS.php';
require 'ISS.php';


$reforma = new Orcamento(500);

$calculadora = new CalculadoraDeImpostos();

echo "ICMS = " . $calculadora->calcula($reforma, new ICMS()) . "<br />";
echo "ISS = " . $calculadora->calcula($reforma,new ISS()) . "<br />";

?>
