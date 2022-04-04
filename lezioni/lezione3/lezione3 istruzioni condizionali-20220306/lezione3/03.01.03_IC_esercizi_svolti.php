<?php

$segreta= 456;

if (gettype($segreta)=='string'){
    printf ("la variabile è di tipo stringa<br />");

} elseif (gettype($segreta)=='integer'){
    printf ("la variabile è di tipo integer <br />");


}

 // 2

 $testo1="il giornale di oggi";
$testo2= "il cinema moderno";

$len1= strlen($testo1);
$len2= strlen($testo2);

  if ($len1 >$len2) {
    printf("il testo uno ha una lunghezza maggiore del testo due <br />");
  } elseif ($len1 < $len2){
    printf("il testo due ha una lunghezza maggiore del testo uno <br />");
  } else {
    printf("i due testi hanno la stessa lunghezza <br />");
  }


// 3 

$scelta= "monti";

switch($scelta){


    case 'mare': 
        printf("abbiamo delle bellissime spiagge < br/>");
        break;



    case 'monti': 
        printf("le più belle passeggiate ti aspettano");
        break;
        

        default: 
        printf("cultura, sport e spettacolo ti aspettano tutto l'anno");
      
    
}

