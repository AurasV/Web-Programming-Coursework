<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
        function reverse_case_letters($text)
        {
            $str = "";
            for($i = 0; $i < strlen($text); $i++)
            {
                $letter = substr($text, $i, 1);
                
                if($letter === strtoupper($letter))
                {
                    $str .= strtolower($letter);
                }
                
                if($letter === strtolower($letter))
                {
                    $str .= strtoupper($letter);
                }
            }
            return $str;
        }
    echo "AvBsfGge<br>";
    echo reverse_case_letters("AvBsfGge") . "<br>";
    echo "<br>JavaScript<br>";
    echo reverse_case_letters("JavaScript") . "<br>";
    echo "<br>PHP<br>";
    echo reverse_case_letters("PHP") . "<br>";
    
    ?>
</body>

</html>
