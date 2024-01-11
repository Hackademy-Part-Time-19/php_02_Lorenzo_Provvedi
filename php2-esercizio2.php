<?php 



$array = [18,25,37,43,52,6,14];

$addizione = 0;
$conteggio = 0;

foreach($array as $elemento){
  

  if($elemento%2 == 0){
    $addizione +=$elemento;
    $conteggio++;
  }
 
 }


$media = $addizione/$conteggio;
echo $media;