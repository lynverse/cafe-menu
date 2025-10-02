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
 
  $num =3;
  $factorial = 1;

  for ($x= $num; $x>=1; $x--) {
        $factorial = $factorial * $x;
  }

  echo "The factorial of $num is $factorial";
 
?>
</body>
</html>