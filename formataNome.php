<?php
function formata_nome($nome) 
{ 
$nome_tratado = trim(strtolower($nome)); 
$nome_array =  explode(" ",$nome_tratado); 
for ($x=0;$x < count($nome_array);$x++) 
{ 
 if (($nome_array[$x] == "de") || ($nome_array[$x] == "da") || ($nome_array[$x] == "do") || 
($nome_array[$x] == "das") || ($nome_array[$x] == "dos") || ($nome_array[$x] == "e")) 
  continue; 
 else 
  $nome_array[$x] = ucfirst($nome_array[$x]); 
} 
$nome = implode(" ", $nome_array); 
return $nome;  
} 