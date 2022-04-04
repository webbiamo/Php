<?php

$testo='Noi e terze parti selezionate utilizziamo cookie o tecnologie simili per finalità tecniche e, con il tuo consenso, anche per altre finalità come specificato nella cookie policy.
Per quanto riguarda la pubblicità, noi e terze parti selezionate, potremmo utilizzare dati di geolocalizzazione precisi e fare una scansione attiva delle caratteristiche del dispositivo ai fini dell’identificazione, al fine di archiviare e/o accedere a informazioni su un dispositivo e trattare dati personali come i tuoi dati di utilizzo, per le seguenti finalità pubblicitarie: annunci e contenuti personalizzati, valutazione degli annunci e del contenuto, osservazioni del pubblico e sviluppo di prodotti.
Puoi liberamente prestare, rifiutare o revocare il tuo consenso, in qualsiasi momento, accedendo al pannello delle preferenze.
Puoi acconsentire all’utilizzo di tali tecnologie utilizzando il pulsante “Accetta”. Chiudendo questa informativa, continui senza accettare.';



function ricorrenze($testo){
    $parole_da_escludere=['il', 'lo','e','per','o'];
    $parole= explode(' ',$testo);
    //return($parole);
    foreach($parole as $parola){
        if (!in_array($parola,$parole_da_escludere)){
       // echo $parola . '<br>';
        if(isset($ricorre[$parola])){
                $ricorre[$parola]++;
            }else{
                    $ricorre[$parola]=1;
            }
        }
    }
    return($ricorre);


}
echo "<pre>";
print_r(ricorrenze($testo));





