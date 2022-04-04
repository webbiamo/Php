<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista nomi</title>
</head>
<body>
    <h1>Nomi Propri:</h1>
    <br>
    <div>
    <?php
        include ("function.php");

        $nomi = ['Alberto','Luca','Francesco','Stefano','Giacomo','Michele','Adam','Walter'];
        
        echo generate_list($nomi);
    ?>
    </div>
</body>
</html>

