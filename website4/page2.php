<?php
session_start();

print_r($_SESSION);

$name = $_SESSION['name'];
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h5>
        Thank you <?php echo $name; ?>, You have subscribed with the email
        <?php echo $email; ?>
    </h5>
    <a href="page3.php">GO TO PAGE 3</a>
</body>

</html>