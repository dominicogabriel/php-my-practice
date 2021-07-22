<?php
# substr
# Returns a portion of a string

// $output = substr('Dom', 0, 2);
// echo $output;

# strlen()
# Return the length of a string

// $output = strlen('Hello World');
// echo $output;


# strpos()
# Finds the position of the first occurence of a sub string

// $output = strpos('Hello world', 'o');
// echo $output;

# strrpos()
# Finds the position of the last occurence of a sub string

// $output = strrpos('Hello world', 'o');
// echo $output;

# trim()
# Strips whitespace

// $text = 'Hello World                ';
// var_dump($text);

// $trimmed = trim($text);
// var_dump($trimmed);

# strtoupper()
# Makes everything uppercase

// $output = strtoupper('Hello World');
// echo $output;


# strtolower()
# Makes everything lowercase

// $output = strtolower('Hello World');
// echo $output;


# ucwords()
# Capitalize everyword

// $output = ucwords('hello world');
// echo $output;

# str_replace()
# Replace all occurences of a search string with a replacement


// $text = 'Hello World';
// $output = str_replace('World', 'Everyone', $text);
// echo $output;


# is_string()
# Check if it's string or no

// $val = 'Hello';
// $output = is_string($val);
// // echo $output;

// $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');
// foreach ($values as $value) {
//     if (is_string($value)) {
//         echo "{$value} is a string<br>";
//     }
// }


# gzcompress()
# Compress a string

$string = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur quo modi ipsam dolor in delectus perferendis at qui, velit similique architecto ratione impedit repudiandae sint, nihil tenetur rem ea, minima quam veniam esse magnam. Pariatur aspernatur expedita labore vitae, optio, reiciendis temporibus sit, ipsam ipsa iure debitis quia laboriosam quod. Temporibus deleniti possimus molestias in aliquam, maxime fugit atque corrupti modi quia consequuntur nulla qui corporis accusantium fugiat inventore veniam voluptas et! Ad illum ratione quisquam vitae fuga quam corporis quod unde aspernatur ab eligendi adipisci magni rerum, ullam aperiam mollitia officiis exercitationem, laborum magnam ipsa reiciendis saepe architecto. Reprehenderit.";
$compressed = gzcompress($string);
echo $compressed;
