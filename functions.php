<?php
#Functions - Block of code that can be repeadtedly called

/*
        Camel Case - myFunc()
        Lower Case - my_function()
        Pascal Case - MyFunction()
    */


// Create Simple Function
function simpleAf()
{
    echo 'Hello World';
}

// Run Simple function
// simpleAf();


// Function with params
function sayHello($name = 'world')
{
    echo "Hello, $name<br>";
}

// sayHello('Joe');
// sayHello('Bob');
// sayHello();

// Return Value
function addNumbers($num1, $num2)
{
    return $num1 + $num2;
}

// echo addNumbers(2, 3);


// By Reference

$myNum = 10;

function addFive($num)
{
    $num += 5;
}
function addTen(&$num)
{
    $num += 10;
}

addFive($myNum);
echo "Value : $myNum<br>";

addTen($myNum);
echo "Value : $myNum<br>";
