<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
        function factorial($n)
        {
            if($n===1)
                return 1;
            return $n * factorial($n - 1);
        }
    echo "Factorial 4 <br>" . factorial(4) . "<br>"; 
    echo "<br>Factorial 5 <br>" . factorial(5) . "<br>"; 
    echo "<br>Factorial 6 <br>" . factorial(6) . "<br>"; 
    
    ?>
</body>

</html>
