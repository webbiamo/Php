<?php
$error=0;
$win=0;
$message= '';
$max_time=2 ;
$debug=$_GET['debug'] ?? 0;
$max_time=$_GET['rufus'] ?? $max_time;

$filename= $_GET['firstcode'] ?? 'fakefile';
$filename = 'archivio/' . $filename . '.txt';



$keys=[
    'catalamina'=>'Felice anno nuovo',
    'urkomando'=>'Enjoy',
    'gipomeda'=>'Buon Natale',
    'astafalona'=>'100 di questi giorni',
    'minutifera'=>'Chi la fa, l\'aspetti',
    'tiporetroma'=>'Non c\'e\' fumo senza arrosto',
    'ullaponeti'=>'moglie e buoi dei paesi tuoi',
    'pinagreti'=>'A caval donato non si guarda in bocca',
    'weritavu'=>'Senza acqua non si va nel deserto',
    'fasetutila'=>'Fare di tutte le erbe un fascio',
    'rediffano'=>'Buttare il bambino con l\'acqua sporca',
    'uppoluane'=>'un mercoledi\' da leoni',
    'grifonamelui'=>'Uno, nessuno , centomila',
    'efromanato'=>'Ancora uno sforzo'
];

// leggi il parametro
if(!empty($_GET['firstcode']) && !empty($_GET['secondcode'])){
    $firstcode = $_GET['firstcode'] ;
    if(!empty($keys[$firstcode])){
        $secondcode_in=$_GET['secondcode'];
        $file_contents = file_get_contents($filename);
       [ $secondcode_stored,$time_stored]=explode(':',$file_contents);
        $time_now=microtime(1);
        $time_diff= $time_now - $time_stored;

        if($secondcode_in<>$secondcode_stored){
            $error=1;
           $message=  '...mmm, la password  segreta inserita non è corretta, prova ancora!';
            

        } elseif($time_diff> $max_time && !$debug){
            $error=1;
            $message= '...mmmm,ci hai messo troppo! Tempo massimo: '.$max_time . 'sec.  Tempo trascorso: '. $time_diff  .' sec. ';
        } else {
           
            if(!$debug){
                $win=1;
                $message= ' HAI VINTO!: la frase che devi comunicare alla agenzia di viaggio è:  <h1> ' . $keys[$firstcode]  .'</h1>';
            }else {
                $message= 'time_stored: ' . $time_stored . 'time_now' . $time_now . ' time diff: '.$time_diff.'<br>';
                $message.= '===DEBUG MODE === time comparsion suppressed. You win but the secret si still there....   ===DEBUG MODE';
            }
        }
  
           
    } else {
        $error=1;
        $message= 'errore: codice  '.$firstcode.' non valido  nella ricerca di codice e password';
    
    }
}else if (!empty($_GET['firstcode'])){
        $firstcode=$_GET['firstcode'];
        //genera un contenuto e mettilo nel file
        if(!empty($keys[$firstcode])){
            $secondcode=uniqid();
            file_put_contents($filename,$secondcode . ':' . microtime(1));
            $message= 'ecco la password segreta: 
' . $secondcode;     
        } else {
            $error=1;
            $message= 'error: codice non valido. Devi inserire il codice ricevuto alla serata. ';
        }
    //leggi il file con il codice 
  
 } else {
 }
     ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Grande concorso</title>
  </head>
  <body>
      <div class='container'>
          <h1>Grande concorso - vinci i tropici</h1>
          
          <?php 
          if (!empty($message)){
              $class= $error ? 'alert-warning':'alert-success';
              echo '<div class="alert '.$class .'">
              '.$message .'
              </div>';
          }
          ?>
          <?php
          // da stampare se non è impostato il valore del primo codice
          if(!$win && (empty($firstcode) || $error )){
          ?>
     <form action="" method="">
     <div class="form-group">
        <label for"firstcode">il codice che hai ricevuto alla inaugurazione</label>
        <input type="text"  class="form-control form-control-lg" name="firstcode" required>
        <small>Inserisci il codice che hai ricevuto alla inaugurazione e premi invia. Riceverai una password segreta valida solo per pochissimi  secondi!</small>
     </div>
     <div class="form-group">
        <button type=submit class="btn btn-primary">Invia per generare la password segreta </button>
      
     </div>
    
     </form>
     <?php
      } elseif (!$win) {
     ?>
     <form action="" method="">
     <div class="form-group">
        <label for"firstcode">il codice che hai ricevuto alla inaugurazione</label>
        <input type="text"  class="form-control form-control-lg" name="firstcode" required>
        <small>Inserisci il codice che hai ricevuto alla inaugurazione </small>
     </div>
    
     <div class="form-group">
        <label for"secondcode">la password segreta generata dal sito </label>
        <input type="text"  class="form-control form-control-lg"name="secondcode">
        <small>Inserisci qui la password segreta ricevuta dal sito. Vale solo per pochissimi secodi!</small>
    </div>
     <div class="form-group">
        <button type=submit class="btn btn-primary ">Invia per vincere </button>
      
     </div>
     </form>
     <?php
      }
      ?>
 </div>
     </body>
     </html>
     






