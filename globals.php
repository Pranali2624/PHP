<?php 
$x=10;
$y=50;
function putdata()
{
    echo $GLOBALS['x'];
    echo $GLOBALS['y'];
}
putdata();
?>