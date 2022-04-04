<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Indice parte1/A:</h1>
    <div>
    <?php
    echo '<a href="./hello.php" target ="_blank">hello.php</a><br>';
    echo '<a href="./conta.php" target ="_blank">conta.php</a><br><br>';
    echo 'string.php';
    echo '<form method="GET" action="./string.php" target="_blank">';
    echo '<input type="textbox" placeholder="parametro word" name="word">';
    echo '<input type="submit" name="Invia">';
    echo '</form><br>';
    echo '<a href="./form.php" target ="_blank">form.php</a><br>';
    echo '<a href="./unalista.php" target ="_blank">unalista.php</a>';
    ?>
    </div>
    
</body>
</html>
