<?php

$a=123;
var_dump($a) ;
echo"<br>";

$b=12.54;
var_dump($b);
echo"<br>";

$c=true;
var_dump($c);
echo"<br>";
$name=array("pranali","apurva");
var_dump($name);
echo"<br>";


$e=null;
var_dump($e);
echo "<br>";

$f="This is string";
var_dump($f);
echo"<br>";

class abc
{
    public function show ()
    {
        echo"hello world";
    }
}

$ditms=new abc();


echo"<br>";
echo var_dump ($ditms)."<br>";







?>