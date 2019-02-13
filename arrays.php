<?php
    #Arrays - Variable that holds multiple values
    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */

    # Indexed

    // $people = array('Romain', 'Jeremy', 'Vanessa');
    // echo $people[0];

    $id = [23, 55, 12];
    $id[] = 0; // Add in last
    // echo $id[1]
    $id[1] = 32;
    // echo $id[1];
    // echo $id[3];

    // echo count($people); // count
    // print_r($people);   // show content
    // var_dump($people); // show content and data types


    # Associative arrays
    $people = array('Romain' => 31, 'Brad' => 35, 'William' => 37);
    // echo $people['Romain'];
    $people['Vanessa'] = 18;
    // echo $people['Vanessa'];

    $id = [22 => 'Brad', 44 => 'Jose', 55 => 'William'];
    // echo $id[22]
    // var_dump($id);

    
    # Mutli-Dimensional
    $cars = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 23, 12),
    );

    echo $cars[1][2];


?>