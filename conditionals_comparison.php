<?php
    # Conditionals
    /* 
        ==
        ===
        <
        >
        <=
        >=
        !=
        !==
    */

    $num = 3;

    // if($num == 5){
    //     echo '5 passed';
    // } elseif($num == 6){
    //     echo '6 passed';
    // } else {
    //     echo 'did not pass';
    // }

    # NESTING IF

    // if($num > 5){
    //     if($num < 10){
    //         echo '$num passed';
    //     }
    // }

    # Logical Operators

    /*
    &&
    ||
    xor exclusive or, one has to be true 
    */

    // if($num > 4 XOR $num < 10) {
    //     echo 'passed!';
    // }

    # SWITCH

    $favColor = 'yellow';

    switch($favColor){
        case 'red':
            echo 'Your favorite color is red';
            break;
        case 'blue':
            echo 'Your favorite color is blue';
            break;
        default:
        echo 'You favorite color is not here!';
    }



?>