<?php
$a=60;
$b=50;
$c=20;
if($a >$b  && $a> $c){
    echo"gretest no. is a=".$a;
}
elseif ($b> $a && $b>$c){
     echo"gretest no. is b=".$b;
        
    }
elseif($c> $a && $c>$b){
    echo" gretest no. is c=". $c;

}

else{
    echo"Don't enter equal value";
}


?>