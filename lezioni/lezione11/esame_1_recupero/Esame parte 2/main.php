
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


  $filename = 'Archivio/elenco.JSON';



  // creato array $content 
  $content['data'] = date("Y-m-d", $_SERVER['REQUEST_TIME']);
  $content['Qta'] = $_REQUEST['Qta'];
  $content['Email'] = $_REQUEST['Email'];
  $content['Spedito'] = 0;  //per gestire la spedizione


  //mette dentro a $json il contenuto di elenco.json trasformandolo da JSON in array associativo
  $json = json_decode(file_get_contents($filename), true);

  $json[] = $content;


  //prende array trasforma in JSon e lo mette in $filename
  file_put_contents($filename, json_encode($json, JSON_FORCE_OBJECT));
  //JSON_FORCE_OBJECT forza l'output ad oggetto


  if (isset($_POST["Qta"])) {

    echo  "Grazie per il tuo ordine di" . $_POST["Qta"] . "Kg Spinaci</b>";
  }
}
