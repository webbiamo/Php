<?php

session_start();

if(!isset($_SESSION['phrase'])){
    $_SESSION['phrase']='';
}