<?php

$arr = ['Romain', 'Testard'];

function checkArray($arr){
    foreach($arr as $val){
        if(is_string($val) != 1){
            throw new Exception('Le contenu est hétérogène');
        }
        $output = ucwords($val);
        $string = '';
        $string .="$output ";
        echo $string;
        
    }
    if(empty($arr)){
        return false;
    }


}

checkArray($arr)

?>