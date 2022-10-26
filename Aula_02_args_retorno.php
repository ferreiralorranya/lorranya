
<?php
function newMensagem() 
{
    return "Hello !";
}

newMensagem();
$m = newMensagem();
echo $m;
echo "<br>", newMensagem();
echo "<br>";

echo "<br>";

function newMensagemComname($name) 
{
    return "Bem vindo, {$name}!";
}

echo "<br>", newMensagemComname("Lorranya");
echo "<br>", newMensagemComname("ferreira");

echo "<br>";

function soma($z, $b) 
{
    return $z + $b;
    
}

$x = 9;
$y = 3;
echo "<br>", soma(5, 7);
echo "<br>", soma($x, $y);

