<?php 

$a=1;
$b=1;
$c=5;

$a1=1;
$b1=-1;
$c1=3;

$d=(($a*$b1)-($a1*$b));
echo"d=".$d . "<br>";

$dx=(($c*$b1)-($a1*$c));
echo"dx=". $dx . "<br>";

$dy=(($a*$c1)-($a1*$c));
echo "dy=".$dy . "<br>";

$x=$dx/$d;
$y=$dy/$d;
echo"x=". $x . "<br>";
echo"y=". $y . "<br>";


?>