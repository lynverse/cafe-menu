<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 
    $marks = 80;

    if ($marks>=90) {
        $grade = "Excellent";
    }
    else if ($marks>=80) {
        $grade = "Good";
    }
    else if ($marks>=75) {
        $grade = "Pass";
    }
    else {
        $grade = "Fail";
    }

    echo "Student grade: $grade";
 
    ?>
</body>
</html>