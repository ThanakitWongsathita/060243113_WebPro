<html>
    <head>
        <title>แสดงการใช้งาน if-else แบบ Nested </title>
    </head>

    <body>
        <?php
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $number3 = $_POST['number3'];
            $max = 0;
            $min = 0;
            if ($number1 > $number2) 
            {
                if ($number1 > $number3) $max = $number1;
                else $max = $number3;
            }
            else 
            {
                if ($number2 > $number3) $max = $number2;
                else $max = $number3;
            }
            echo "Three Number : <b>$number1, $number2, $number3 </b><br/>";
            echo "Max value : <b>$max </b><br/>";
        ?>
    </body>
</html>