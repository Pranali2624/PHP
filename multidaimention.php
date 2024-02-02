<?php 
$A=array(array(1,"Pranali","BCS","DITMS"), 
array (2,"Apurva","BCS","DITMS"), 
array(3,"Aniket","BCS","DITMS"), 
array(4,"Gaurav","BCS","DITMS")); 
echo " The Information Of Students <br> "; 
for ($i=0; $i<4; $i++) 
{ 
 for($j=0; $j<4; $j++) 
 { 
 echo $A[$i][$j]." "; 
 } 
 echo"<br>";
 }?> 
