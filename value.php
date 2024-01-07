<?php 
$A=array("Pranali"=>"19","Apurva"=>"20","
Aniket"=>"20","Pranav"=>"16"); 
foreach($A as $P=>$c){ 
echo " $P" ."= ". "$c <br>";} 
 asort($A); 
echo"<br><br>"; 
echo " Array In Acending Order By Value <br> 
<br>"; 
foreach($A as $P=>$c){ 
echo " $P" ."= ". "$c <br>";} 
arsort($A); 
echo"<br><br>"; 
echo " Array In Decending Order By Value <br> 
<br>"; 
foreach($A as $P=>$c){ 
echo " $P" ."= ". "$c <br>";}?>