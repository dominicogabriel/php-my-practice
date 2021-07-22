<?php
#Loops - Execute code set number of times

/*
    For
    While
    Do..While
    Foreach
    */


#For Loops
#@params - init, condition, inc
// for ($i = 0; $i < 10; $i++) {
//     echo 'Number ' . $i;
//     echo '<br>';
// }


#While Loops
#@params - condition

// $i = 0;
// while ($i < 10) {
//     echo $i;
//     echo '<br>';
//     $i++;
// }


#Do..While loops
#@params - condition
// $i = 0;
// do {
//     echo $i;
//     echo '<br>';
//     $i++;
// } while ($i < 10);


#For Each
$people = array('Dom' => 'Dom@gmail.com', 'Ade' => 'Ade@gmail.com', 'Dion' => 'Dion@gmail.com');

foreach ($people as $person => $email) {
    echo $person . ' : ' . $email;
    echo '<br>';
}
