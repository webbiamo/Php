<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista frutti</title>
</head>
<body>
    <h1>lista di frutti:</h1>
    <br>
    <div>
    <?php
        include ("function.php");

        $frutta = ['Fragole', 'Mela', 'Banane', 'Kiwi', 'Mandarini', 'Melone', 'Anguria', 'Pera'];
        
        echo list_generate($frutta);
    ?>
    </div>
</body>
</html>

