<pre>
<?php
// print_r($GLOBALS);
print_r($_REQUEST); // ramene GET ou POST
$message = "Hello World !";
$suite_message = "Coucou";
$estMajeur = "";
$age = 25;

if ($age >= 18){
    $estMajeur = "OUI";
} else{
    $estMajeur = "NON";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    coucou
    <br>
    <?php
    echo $message;
    ?>
     <br>
    <?php
    echo $suite_message;
    ?>

<br>
    <?php
    echo $estMajeur;
    ?>
</body>
</html>