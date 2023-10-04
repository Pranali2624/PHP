<?php
$a=50;
$b=20;
$c=10;
$d=null;


$d=($a>$b&&$a>$c)? $a:(($b>$a&&$b>$c)?$b:$c);

echo"gretest number is=". $d;
?>