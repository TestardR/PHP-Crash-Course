<?php

# FUNCTION 

// Create function
function simpleFunction(){
    echo 'Hello World';
}

// Call function
// simpleFunction();

// Function with Params
function sayHello($name = "Maria Carey"){
    echo $name;
}

// sayHello('Say my name, say my name');
// sayHello();

function addNumbers($num1, $num2){
    // echo $num1 + $num2;
    return $num1 + $num2;
}

// addNumbers(2,3);
// echo addNumbers(5, 6);

// By Reference
$myNum = 10;

function addFive($num){
    $num += 5;
}

// the & allows us to modify the given variable
function addTen(&$num){
    $num +=10;
}

AddFive($myNum);
echo "Value: $myNum<br>";
addTen($myNum);
echo "Value: $myNum<br>";

?>