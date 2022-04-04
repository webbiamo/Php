<?php
require('sessions.php');

if (isset($_GET['word'])){
    $_SESSION['phrase'] .=  $_GET['word'] . ' ';
   
 
}
header('Location:frase.php');