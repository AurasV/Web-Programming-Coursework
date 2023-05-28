<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    
        function deleteElement($arr, $element)
        {
            $index = array_search($element, $arr);
            
            if ($index > -1)
            {
               array_splice($arr, $index, 1);
            }
            return $arr;
        }
        function displayArr($arr)
        {
            for($i = 0; $i < count($arr); $i++)
            {
                echo $arr[$i] . " ";
            }
            echo "<br>";
        }
    
    $arrTest = [5, 7, 1, 4, 8];
    echo "Initial Array <br>";
    displayArr($arrTest);
    echo "<br> Delete 4 <br>";
    displayArr(deleteElement($arrTest, 4));
    echo "<br> Delete 9 <br>";
    displayArr(deleteElement($arrTest, 9));
    echo "<br> Delete 7 <br>";
    displayArr(deleteElement($arrTest, 7));
        
    ?>
</body>

</html>
