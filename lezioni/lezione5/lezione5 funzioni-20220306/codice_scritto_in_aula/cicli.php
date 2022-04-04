<?php

$books=[
    'COD001' =>'Il giardino di rose',
    'COD002' =>'Lo frittata'
];

echo $books['COD001'] ;

foreach($books as $book){
  echo $book . '<br>';
  if($book=='Lo frittata'){
      $book = 'La frittata';
  }

}

print_r($books);

echo "<hr>";

// posso usare la chiave
foreach($books as $code=>$book){
    echo $book . '<br>';
    if($book=='Il giardino di rose'){
        $books[$code] = 'Il giardino di spine';
    }
  
  }
  
  print_r($books);

  echo "<hr>";

// posso usare un reference
foreach($books as &$book){
    echo $book . '<br>';
    if($book=='Lo frittata'){
        $book = 'La frittata';
    }
  
  }
  
  print_r($books);