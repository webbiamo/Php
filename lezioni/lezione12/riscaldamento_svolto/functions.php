<?php

function print_list($words){
     $html= '<ul>';
        
        foreach($words as $str){     
            $html .= '<li><a href=add.php?word='. $str .'>'.$str.' </a></li>';
        }
     $html.= '   
    </ul>';

    return $html;

}