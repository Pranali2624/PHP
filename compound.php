<?php
if(isset($_POST["cal"]))
{
    $p=$_POST["principle"];
    $r=$_POST["rate"];
    $n=$_POST["time"];
    $a=$p*(1+($r/100))^$n;
    $ci=$a-$p;
    echo"compound intrest =".$ci;
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title>Document</title>
 </head>
 <body>
    <form action="" method="POST">
        <lable for="firstno"> Principle Amount</label>
        <input type="text" name=" principle"><br><br>
        
        <label  for="secondno" >Rate of intrest</label>
        <input type="text" name="rate" ><br><br>

        <label for="thirdno"> Number of years</label>
        <input type="text" name="time"><br><br>
        <input type="submit" name="cal" value=" calculate">
    
     </form>
 </body>
 </html>