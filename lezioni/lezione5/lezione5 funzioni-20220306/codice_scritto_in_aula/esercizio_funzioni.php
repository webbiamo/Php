<?php

// scrivere una funzione che calcoli il massimo tra gli elementi ricevuti in numero
// non noto usando la sintassi "variadic"

function massimo(int ...$numeri){
    return max($numeri);

}


echo 'il massimo è: '. massimo(4,-1 ,5,6)  . '<br>';

echo 'il massimo è: '. max(4,-1 ,5,'gatto',6)  . '<br>';

 

// funzione wrapper
