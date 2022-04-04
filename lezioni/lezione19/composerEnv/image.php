<?php

require 'vendor/autoload.php';

use Spatie\Image\Image;

//ridimensionare una immagine alla larghezza di 50px

Image::load('image.jpg')
->width(50)                           //questa istruzione carica immagine modifica il whidth e salva in 
->save('newimage.jpg');                //newimage.jpg
