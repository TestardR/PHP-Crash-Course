<?php
    # Loops
    /*
    For
    While
    Do..While
    Foreach
    */

    # For -  When you know the final $i value
    // for($i = 0; $i < 10; $i++){
    //     // echo 'Hello World';
    //     echo 'Number' . ' ' . $i;
    //     echo '<br>';

    // }

    # While -  When you don't know the final $i value
    // $i = 0;
    // while($i < 10){
    //     echo 'Number' . ' ' . $i;
    //     echo '<br>';
    //     $i++;
    // }

    # Do..While, less common
    // $i = 0;
    // do {
    //     echo 'Number' . ' ' . $i;
    //     echo '<br>';
    //     $i++;
    // }
    // while($i < 10);

    # Foreach for arrays
    # Simple arrays
    // $people = ['Romain', 'Vanessa', 'William'];
    // foreach($people as $person){
    //     echo $person;
    //     echo '<br>';
    // }

    # Associative Arrays
    $people = ['Romain' => 22, 'Vanessa' => 12, 'William' => 02];
    foreach($people as $person => $age){
        echo $person . ' ' . $age;
        echo '<br>';
    }
?>
