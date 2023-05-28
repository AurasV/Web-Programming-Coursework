<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exercise 18</title>
</head>

<body>
    <?php
        function median($tab)
        {
            $sum = 0;
            sort($tab);
            if(count($tab) % 2 == 0)
            {
                for($i = 1; $i < count($tab) - 1; $i++)
                {
                    $sum += $tab[$i];
                }
                return $sum / (count($tab) - 2);
            }
            else 
                return $tab[intval(count($tab) / 2 )];
        }
    $arr1 = [3, 5, 1, 4, 2];
    $arr2 = [3, 5, 1, 4, 2, 7];
    $arr3 = [4, 6, 2, 5, 3, 8];
    $arr4 = [7, 9, 5, 8, 6, 11];
    echo "Array 1<br>";
    echo median($arr1);
    echo "<br>Array 2<br>";
    echo median($arr2);
    echo "<br>Array 3<br>";
    echo median($arr3);
    echo "<br>Array 4<br>";
    echo median($arr4);
    ?>
</body>

</html>
