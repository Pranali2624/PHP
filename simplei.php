<?php
if(isset($_POST["CALCULATE"]))
{
    $p=$_POST["principal"];
    $r=$_POST["rateofintrest"];
    $n=$_POST["noofyear"];
    $i=($p*$r*$n)/100;
    echo"simple intrest =".$i;
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title>Document</title>
 </head>
 <body>
    <form action="" method="POST">
    Principal <input type="text" name="principal"><br>
    rate of intrest <input type="text" name="rateofintrest"><br>
    no.of year <input type="text" name="noofyear"><br>
    <input type="submit" name="CALCULATE" value="CALCULATE">
     </form>
 </body>
 </html>