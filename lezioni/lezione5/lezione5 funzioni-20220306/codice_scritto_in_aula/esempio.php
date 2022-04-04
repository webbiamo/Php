<?php

$nomi=['roberto','pietro','carla'];

echo $nomi[1];

$docente=['nome'=>'roberto', 'cognome'=>'ruffinengo'];

echo 'il suo nome è : ' . $docente['nome'] . "<br>";


$books=['COD001'=>'titolo1',
        'COD002'=>'titolo2'    
];
                 
foreach($docente as $key=>$value){
    echo $key . " " . $value . "<br>";

}

foreach($nomi as $nome){
    echo $nome;
}


$animali=[
   'cane'=>[
       'Bobo',
       ['pippo','pluto','paperino']
    ],
   'gatto'=>['micio', 2],
   

];

foreach($animali as $key => $animale){
  echo "il nome del mio animale ".  $animale[0];

}

echo '<pre>';
print_r($animali);
