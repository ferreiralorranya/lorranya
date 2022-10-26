
<?php

$soma = function ($x, $y) 
{
    return $x + $y;
};

echo $soma(6, 8) . "<br>";


echo "<br>";


function executar($x, $y, $op, $funcao) 
{
    $resultado = $funcao($x, $y);
    echo "$x $op $y = $resultado <br>";
}

executar(2, 3, '+', $soma);


echo "<br>";


$multiplicacao = function($x, $y) 
{
    return $x * $y;
};

executar(2, 3, '*', $multiplicacao);

