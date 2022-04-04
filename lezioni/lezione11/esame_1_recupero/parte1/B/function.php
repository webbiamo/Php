<?php
    function generate_list(array $items) :string{
        sort($items);
        $html = '<ul>';
        foreach($items as $item){
            $html .= '<li>';
            $html .= $item;
            $html .='</li>';
        }
        $html .= '</ul>';

        return $html;
    }
?>