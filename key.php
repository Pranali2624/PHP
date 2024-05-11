<?php 
$A=array("Pranali"=>"19","Apurva"=>"20","Aniket"=>"20","Pranav"=>"16"); 
foreach($A as $P=>$c) 
{echo " $P" ."= ". "$c <br>";} 
 ksort($A); 
echo"<br><br>"; 
echo " Array In Acending Order By Key <br> <br>"; 
foreach($A as $P=>$c) 
{echo " $P" ."= ". "$c <br>";} 
krsort($A); 
echo"<br><br>"; 
echo " Array In Decending Order By Key<br> <br>"; 
foreach($A as $P=>$c) 
{echo " $P" ."= ". "$c <br>";}?>