<?php

$a="hello friends";
echo "String length=" .strlen($a)."<br>";


echo"String contain word=" . str_word_count($a)."<br>";

$s=strrev($a);
echo "string reverse=" .$s."<br>";


echo "string friends position=". strpos($a,"friends")."<br>";
echo str_replace("friends","pranali",$a);




?>