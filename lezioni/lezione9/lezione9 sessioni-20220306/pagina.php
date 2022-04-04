<?php

session_start();

if(!isset($_SESSION['armadio'])){
    $_SESSION['armadio']=['maglia','pantaloni','calze'];
}

if(!isset($_SESSION['valigia'])){
    $_SESSION['valigia']=[];
}

$armadio=$_SESSION['armadio'];
$valigia=$_SESSION['valigia'];

if(isset($_GET['sposta'])&& isset($armadio[$_GET['sposta']])){

    $id=$_GET['sposta'];
    echo 'devo prendere ' . $armadio[$id] .'<br>' ;
    $valigia[]=$armadio[$id];
    unset($armadio[$id]);
}

echo '<br>armadio';
echo '<ul>';

foreach($armadio as $id=>$abito){
    echo '<li>'. $abito.' <a href="pagina.php?sposta='.$id.'">prendi</a></li>' ."\n";
    /** <a href="pagina.php?sposta=0">prendi</a> */
}
echo '</ul>';

echo '<hr>';

echo 'valigia';
echo '<ul>';
foreach($valigia as $abito){
    echo '<li>'. $abito.'</li>';
}

echo '</ul>';

$_SESSION['armadio']=$armadio;
$_SESSION['valigia']=$valigia;


