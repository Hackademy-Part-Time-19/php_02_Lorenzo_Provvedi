<?php 


$temperature = [ "Venezia" => 16, "Bari" => 32, "Roma" => 28, 
                 "Napoli" => 30, "Milano" => 13, "Palermo" => 14, 
                 "Torino" => 24, "Lecce" => 27, "Genova" => 30, 
                 "Catania" => 11, "Cosenza" => 9, ];



$temperatura = 30;

if ($temperatura<15){
    echo "Fa freddo" ."\n";
} else if($temperatura>=15 && $temperatura<24){
    echo "Fa caldo" . "\n";
} else if($temperatura >25){
    echo "Fa molto caldo" ."\n";
}

foreach($temperature as $chiave => $valore){
  if($valore<15){
    echo "A" . " " . $chiave. " " . "fa" . " ". "freddo" . " " . "con temperatura di" . $valore . " " . "gradi" . "\n";
  }

  else if($valore>=15 && $valore<24){
    echo "A" . " " . $chiave. " " . "fa" . " ". "caldo" . " " . "con temperatura di" . $valore . " " . "gradi" ."\n";
  }

  else if($valore>25){
    echo "A" . " " . $chiave. " " . "fa" . " ". "molto caldo" . " " . "con temperatura di" . $valore . " " . "gradi" . "\n";
  }
}
