<?php
    function list_generate(array $articles) :string{
        $html = '<ul>';
        foreach($articles as $article){
            $html .= '<li>';
            $html .= $article;
            $html .='</li>';
        }
        $html .= '</ul>';

        return $html;
    }
?>