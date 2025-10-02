<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Activity 7</title>

    <style>
        p {
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php

    $a = $_POST['fnum'];
    $b = $_POST['snum'];
    $operation = $_POST["operation"];
    $result = 0;

    switch ($operation) {
        case 'Add':
            $result = $a + $b;
            break;
        case 'Subtract':
            $result = $a - $b;
            break;
        case 'Multiply':
            $result = $a * $b;
            break;
        case 'Divide':
            $result = $a / $b;
            break;
    }
    ?>

    <h1>Basic Calculator</h1>

    <form method= "post" action= "">
        <p>First Number <input type= "text" name= "fnum"></p>
        <p>Second Number <input type= "text" name= "snum"></p>
        <p>Result: <?php echo $result; ?> </p>
        <input type= submit name= "operation" value= "Add">
        <input type= submit name= "operation" value="Subtract">
        <input type= submit name= "operation" value="Multiply">
        <input type= submit name= "operation" value="Divide">
    </form>

</body>
</html>