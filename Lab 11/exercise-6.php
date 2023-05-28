<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exercise 6</title>
</head>

<body>
    <?php
        function sum($n)
        {
            $sum = 0;
            for($i = 1; $i <= $n; $i++)
            {
                for($j = 1; $j <= $i; $j++)
                {
                    $sum += $j;
                }
            }
            return $sum;
        }
    echo "Sum of 1<br>";
    echo sum(1);
    echo "<br>Sum of 2<br>";
    echo sum(2);
    echo "<br>Sum of 3<br>";
    echo sum(3);
    echo "<br>Sum of 4<br>";
    echo sum(4);
    echo "<br>Sum of 5<br>";
    echo sum(5);
    ?>

</body>

</html>
