<?php 

$users = [

   ['name' => 'Davide', 'cognome' => 'Cariola', 'gender' => 'M'],
   ['name' => 'Giorgia', 'cognome' => 'Bianchi', 'gender' => 'F'],
   ['name' => 'Optimus', 'cognome' => 'Prime', 'gender' => 'M'],
   ['name' => 'Luca', 'cognome' => 'Vivaldi', 'gender' => 'M'],
   ['name' => 'Sara', 'cognome' => 'pietriccia', 'gender' => 'F'],
];





foreach($users as $elemento){
  if($elemento['gender']== 'M'){
    echo "buongiorno signor" . " ". $elemento['name'] . " " . $elemento['cognome'] . "\n";
  }

  elseif ($elemento['gender']== 'F'){
    echo "buongiorno signora" . " " . $elemento['name'] . " " . $elemento['cognome'] . "\n";
  };

};




foreach($users as $elemento){
  switch($elemento){
    case $elemento['gender'] == 'M': 
      echo "buongiorno signor" . " ". $elemento['name'] . " " . $elemento['cognome'] . "\n";
         break;
    case $elemento['gender'] == 'F':
      echo "buongiorno signora" . " " . $elemento['name'] . " " . $elemento['cognome'] . "\n";
      break;
  }
}  


?>