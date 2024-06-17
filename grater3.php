<?php
$a=40;
$b=20;
$c=50;
$d=null;


$d=($a>$b&&$a>$c)? $a:(($b>$a&&$b>$c)?$b:$c);

echo"gretest number is=". $d;
?>
