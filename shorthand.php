<?php

$loggedin = True;
$arr = [1, 2, 3, 4, 5];
// if ($loggedin) {
//     echo 'You are logged in';
// } else {
//     echo 'You are not logged in';
// }

// echo ($loggedin) ? 'You are logged in' : 'You are not logged in';

// $isRegistered = ($loggedin == true) ? true : false;
// echo $isRegistered;



//  Shorthand nested statement
// $age = 8;
// $score = 15;

// echo 'Your score is: ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));


?>
<!-- // Alt syntax -->
<div>
    <?php if ($loggedin) { ?>
        <h1>Welcome User</h1>
    <?php } else { ?>
        <h1>Welcome Guest </h1>
    <?php } ?>
</div>

<div>
    <?php if ($loggedin) :  ?>
        <h1>Welcome User</h1>
    <?php endif; ?>
</div>

<!-- Array Looping Shorthand -->
<div>
    <?php foreach ($arr as $val) : ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>

<div>
    <?php for ($i = 0; $i < 10; $i++) : ?>
        <li><?php echo $i; ?></li>
    <?php endfor; ?>
</div>