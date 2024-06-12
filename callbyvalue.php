<?php
$a=20;
$b=50;
function swap($x,$y)
{
    $t=$x;
    $x=$y;
    $y=$t;
    echo"Inside  function <br>";
    echo"a=".$x."<br>";
    echo"b=".$y."<br>";
}
echo"Outside the function before calling function<br>";
echo"a=".$a."<br>";
echo"b=".$b."<br>";
swap($a,$b);

echo"Outside the function  after calling function<br>";
echo"a=".$a."<br>";
echo"b=".$b."<br>";
?>

