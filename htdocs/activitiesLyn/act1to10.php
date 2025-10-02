<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ACTIVITIES</title>

    <style>
        body{
            text-align: center;
        }
        .center{
            margin-left: auto;
            margin-right: auto;
        }
    </style>

</head>
<body>
    <h1> ACTIVITY 1 </h1>
    
    <?php 
    $first = 15;
    $second = 10;
    $sum = $first + $second;

    echo "Result: " .$sum;
    ?>

    <h1> ACTIVITY 2 </h1>

    <?php 
    $message_1 = "Good Morning.";
    $message_2 = "Have a nice day!";

    echo $message_1. " " .$message_2;
    ?>

    <h1> ACTIVITY 3 </h1>

    <?php
    $marks = 80;

    if($marks>=90) {
        $grade = "Excellent";
    }
    else if($marks>=80) {
        $grade = "Good";
    }
    else if($marks>=75) {
        $grade = "Pass";
    }
    else {
        $grade = "Fail";
    }

    echo "Student grade: $grade";

    ?>

    <h1> ACTIVITY 4 </h1>

    <?php
    $count = 1;

    while($count <= 15) {
        echo $count;
        echo "<br>";

        $count++;
    }

    ?>

    <h1> ACTIVITY 5 </h1>

    <?php
    $num = 3;
    $factorial = 1;

    for($x=$num; $x>=1; $x--) {
        $factorial = $factorial * $x;
    }

    echo "The factorial of $num is $factorial";

    ?>

    <h1> ACTIVITY 6 </h1>

    <table class="center" width = "400px" cellspacing = "0px" cellpadding = "0px" border = "1px" >
    <?php

    for($row=1; $row<=8; $row++) {
        echo "<tr>";
        for($column=1; $column<=8; $column++) {
            $total = $row + $column;
            if($total%2==0) {
                echo "<td height = 35px width = 30px bgcolor=#FFFFFF></td>";
            }
            else {
                echo "<td height = 35px width = 30px bgcolor=#000000></td>";
            }
        }
        echo "</tr>";
    }
    ?>
    </table>

    <h1> ACTIVITY 7 </h1>

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

    <h1> ACTIVITY 8 </h1>

    <?php
    for($i=1;$i<=7;$i++){        
       for($j=0;$j<=$i;$j++){
        echo "*";
       }
        echo "<br/>";
    }
    ?>

    <h1> ACTIVITY 9 </h1>

    <?php
    $name = "Jonalyn M. Malmisa!    ";

    echo "Welcome to PHP, " .$name;

    ?>

    <h1> ACTIVITY 10 </h1>

    <?php 
    $first = 17;
    $second = 7;
    $sum = $first + $second;

    echo "Number 1: " .$first; 
    echo "</br>";
    echo "Number 2: " .$second;
    echo "</br>";
    echo "Total: " .$sum;
    echo "</br>";
    ?>

</body>
</html>