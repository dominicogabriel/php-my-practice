<?php
#Array - Variable that holds multiple values
/*
        - Indexed
        - Associative
        - Multi-dimensional
    */

// Indexed
$people = array('Kevin', 'Dom', 'Ade');
$ids = array(23, 55, 12);
$cars = ['Honda', 'Toyota', 'Ford'];
$cars[3] = 'chevy';
$cars[] = 'BMW';


// echo count($cars);
// print_r($cars);
// var_dump($cars);

// echo $cars[4];
// echo $ids[2];
// echo $people[0];


//  Associative Arrays
$people = array('Brad' => 35, 'Dom' => 32, 'Ade' => 37);
$ids = [22 => 'Brad', 44 => 'Dom', 63 => 'Ade'];
// echo $ids[22];
$people['Jill'] = 42;
// echo $people['Jill'];
// print_r($people);
// var_dump($people);

// Multi-dimensional
$cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12)
);
echo $cars[1][1];
