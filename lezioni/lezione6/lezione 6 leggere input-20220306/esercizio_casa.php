<?php

/* modulo di richiesta informazioni


scrivere un form con un campo testo e poi  un radio button che consenta di scegliere tra "auto" e "moto"
e una checkbox  con etichetta "copertura assicurativa"
e poi stampare un testo di conferma tipo: 
"grazie per la tua richiesta di preventivo per una [auto | moto]
[con | senza ] copertura assicurativa "
*/

if($_SERVER['REQUEST_METHOD']==='POST'){
    $assurance = !empty($_POST['assurance'])? ' con ' : ' senza ';
    $vehicle= $_POST['vehicle'];
    //print_r($_POST);
    echo 'Grazie per la tua richiesta di preventivo per ' . $vehicle  .' ' .  $assurance . ' copertura assicurativa' ;

} else{
    // visualizza il form
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Modulo richiesta informazioni</title>
  </head>
  <body>
      <div class='container'>
          <h1>Richiesta informazioni</h1>
    <form method='POST' >
        <div class="form-group">
            <label for='name'>nome e cognome</label>
            <input type='text'  class="form-control " name='name' value='' >
        </div>
        tipo di veicolo
        <div class="form-check">
            <input type="radio"   class="form-check-input" name='vehicle' value='auto' id="checkAuto">
            <label class="form-check-label" for="checkAuto">Auto </label>
        </div>
        <div class="form-check">
            <input type="radio"   class="form-check-input" name='vehicle' value='moto' id="checkMoto">
            <label for="checkMoto" class="form-check-label" >moto</label>
        </div>
        copertura assicurativa
        <div class="form-check">
            <label for="assurance" class="form-check-label"> </label>
            <input type="checkbox" class="form-check-input" name="assurance" id="assurance" >
            <label for="assurance" class="form-check-label">voglio attivare la copertura assicurativa </label>
        </div>
        <div class="form-group">
            <input type='submit' name='Invia'>
        </div>  

        </form>
</div>
</body>
</html>

    <?php
}