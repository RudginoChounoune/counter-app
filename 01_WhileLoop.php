<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $x =1;
    $countTo = isset($_GET["end"]) ? $_GET["end"]: 10;

    while($x <= $countTo){
        echo"The number is: $x <br>";
        $x++;
    }
    
    ?>
    
</body>
</html>