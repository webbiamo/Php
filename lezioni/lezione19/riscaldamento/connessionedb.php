<?php


require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//var_dump($_ENV);
//die;



try	{
    $db	=	new	PDO('mysql:host='.$_ENV['servername'].';dbname='.$_ENV['database'].';charset=utf8mb4',
    	$_ENV['username'],	$_ENV['password']);
}	catch	(PDOException	$e)	{	
    throw	new	Exception(sprintf(
        "PDO	connection	failed:	%s\n",	$e->getMessage()	
    ));	

}	
var_dump($db);	

