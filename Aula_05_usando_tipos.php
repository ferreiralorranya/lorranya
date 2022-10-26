
<?php
function somar1($x, $y) 
{

    return $x + $y;
}

echo somar1(1, 2) . "<br>";
echo somar1(1.7, 2.5) . "<br>";

echo "<br>";

function somar2(int $x, int $y)
{
    return $x + $y;
}

echo somar2(1, 2) . "<br>";
echo somar2(1.7, 2.5) . "<br>";

echo "<br>";

