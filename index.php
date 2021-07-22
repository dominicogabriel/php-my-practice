<?php
// Single line comment
# Single line comment
/* Multiple line comment */


// Variables
/*
    - prefix $
    - Start with a letter or an underscore
    - Only letters, numbers, and underscores
    - Case Sensitive
*/

#Data Types
/*
        String
        Integers
        floats
        booleans
        Arrays
        objects
        NULL
        Resource
    */
$output = 'Hello World';
$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;
$float1 = 4.4;

$string1 = 'Hello';
$string2 = 'Dom';
$greeting = $string1 . ' ' . $string2;
$greeting1 = "$string1 $string2";

$string3 = 'They\'re Here';


// Only if this thing not gonna change (Constant)
define('GREETING', 'Hello Everyone');
echo GREETING;
