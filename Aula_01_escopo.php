
<?php
function Mensagen() 
{
    echo "Vamos brincar ? <br>";
    echo "Vamos aprender a programar em PHP!<br>";
}

Mensagen();
Mensagen();
Mensagen();

echo "<br>";

$var = 1;

function Valor() 
{
    $var = 3;
    echo "Durante a função: $var <br>";
}

echo "Antes: $var <br>";
Valor();
echo "Depois: $var <br>";

echo "<br>";

function ValorDeVerdade() 
{
    global $var;
    $var = 9;
    echo "Durante a função: $var <br>";
}

echo "Antes: $var <br>";
ValorDeVerdade();
echo "Depois: $var <br>";