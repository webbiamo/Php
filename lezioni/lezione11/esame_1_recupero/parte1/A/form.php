<?php
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $frase = $_POST['txtbox'];
        echo $frase;
    }
?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
        <div class="container">
            <form method="POST">
                <div class="form-group">
                    <label for="txtbox"></label>
                    <input type="textbox"  class="form-control" name="txtbox" id="txtbox" placeholder="Scrivi qualcosa">
                </div>
                <div class="form-group">
                    <input type="submit" name="Invia">
                </div> 
            </form>
        </div>
    </body>
</html>