<?php

function foo($a){
    $a=7;
    printf("%d - ",$a);

}

function bar(&$a){
    $a=7;
    printf("%d - ",$a);

}




$a=33112 ;
foo($a);
printf("%d",$a);


echo "<hr>";

$a=33112 ;
bar($a);
printf("%d",$a);


