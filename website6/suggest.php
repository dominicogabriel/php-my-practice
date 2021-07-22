<?php
// People Array @TODO - Get from 08
$people[] = 'Dom';
$people[] = 'Ade';
$people[] = 'Raysha';
$people[] = 'Zidan';
$people[] = 'Uncle Ben';
$people[] = 'Peter';
$people[] = 'Parker';
$people[] = 'Spidey';
$people[] = 'Mr Stark';
$people[] = 'Joe';
$people[] = 'Joe Papa';
$people[] = 'Pekora';
$people[] = 'Moona';
$people[] = 'Suisei';

// Get Query String
$q = $_REQUEST['q'];

$suggestion = "";

// GET Suggestion
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($people as $person) {
        if (stristr($q, substr($person, 0, $len))) {
            if ($suggestion === "") {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;
