<?php

# Check for Posted Data
// if (filter_has_var(INPUT_POST, 'data')) {
//     echo 'Data Found';
// } else {
//     echo 'No Data';
// }
// if (filter_has_var(INPUT_POST, 'data')) {
//     // echo 'Data Found';


//     $email = $_POST['data'];

//     // Remove Illegal Character (Sanitize)
//     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
//     echo $email . '<br>';


//     // Taking Value
//     if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo 'Email is Valid';
//     } else {
//         echo 'Email is not valid';
//     }
// }

/*





*/
// $var = 23;
// if (filter_var($var, FILTER_VALIDATE_INT)) {
//     echo $var . 'is a num';
// } else {
//     echo $var . 'is not a num';
// }

// $var = '<script>alert1</script>';
// echo $var;
// echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
// var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

// $filter = array(
//     "data" => FILTER_VALIDATE_EMAIL,
//     "data2" => array(
//         "filter" => FILTER_VALIDATE_INT,
//         "options" => array(
//             "min_range" => 1,
//             "max_range" => 100
//         )
//     )
// );

// print_r(filter_input_array(INPUT_POST, $filter));


$arr = array(
    "name" => "dom",
    "age" => "22",
    "email" => "dom@gmail.com"
);

$filter = array(
    "name" => array(
        "filter" => FILTER_CALLBACK,
        "options" => "ucwords"
    ),
    "age" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 120
        )
    ),
    "email" => FILTER_VALIDATE_EMAIL
);
print_r(filter_var_array($arr, $filter));
?>


<form method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name='data'>
    <input type="text" name='data2'>
    <button type="submit">Submit</button>
</form>