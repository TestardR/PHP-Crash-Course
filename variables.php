<h1><?php
    // echo 'Hello World';

?></h1>

<?php
     // Single line comments
    /*
    Mutli line
    */

    // $output = 'Hello you!';
    // echo $output;

    # Variables

    /* 
    - Prefix $
    - Start with a letter or an underscore
    - Case sensitive
    */

    # Data Types

    /* 
    - String
    - Integers
    - Floats
    - Booleans
    - Arrays
    - Objects
    - NULL
    - Resource
    */

    $string1 = 'Romain';
    $string2 = 'Testard';

    # Add strings
    // $fullName = $string1 .' '. $string2 . '!';
    $fullName = "$string1 $string2";
    // echo $fullName;

    # Escaping
    // $string3 = "They're Here";
    $string3 = 'They\'re Here';
    // echo $string3;

    $num = 2;
    $float = 4.4;
    $bool = true;

    # Constants
    define('GREETING', 'Hello Everyone');
    echo GREETING;


?>

