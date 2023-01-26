<html>
    <head>
        <title>การคำนวณพื้นที่</title>
    </head>

    <body>
        <?php  
        if (isset($_POST['submit']))
        {
            function square($side)
            {
                echo ("Square side is : ").$side."<br>";
                echo ("Result is : " ).$side*$side ."<br>";
            }
            function rectangle($wide,$long)
            {
                echo ("Wide side is : ").$wide."<br>";
                echo ("Long side is : ").$long."<br>";
                echo ("Result is : " ).$wide*$long ."<br>"; 
            }
            function trapezoid($width,$height)
            {
                echo ("Width side is : ").$width."<br>";
                echo ("Height side is : ").$height."<br>";
                echo ("Result is : " ).$width*$height ."<br>";
            } 
            function trapezoid1($width,$height)
            {
                echo ("Width side is : ").$width."<br>";
                echo ("Height side is : ").$height."<br>";
                echo ("Result is : " ).$width*$height ."<br>";
            }  
            function triangle($base,$height)
            {
                echo ("Base side is : ").$base."<br>";
                echo ("Height side is : ").$height."<br>";
                echo ("Result is : " ).(1/2)*$base*$height ."<br>";
            }

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $geo = $_POST['geo'];

            if($geo == "square")
            {
                square($num1);
            }                         
            else if($geo == "rectangle")
            {
                rectangle($num1,$num2);
            }
            else if($geo == "trapezoid1")
            {
                trapezoid1($num1,$num2);
            }
            else if($geo == "triangle")
            {
                triangle($num1,$num2);
            }
        }
        //else
        //{
        ?>
        
        <form action="ex1.php" method="post" name="exFrom1" id="exFrom1">
            <h2>การคำนวณพื้นที่</h2>
            <input type="text" name="num1"><br>
            <input type="text" name="num2"><br>
            <input type="radio" name="geo" value="square">สี่เหลียมจตุรัส<br>
            <input type="radio" name="geo" value="rectangle">สี่เหลียมผืนผ้า<br>
            <input type="radio" name="geo" value="trapezoid1">สี่เหลียมขนมเปียกปูน<br>
            <input type="radio" name="geo" value="triangle">สามเหลียม<br>
            <input type="submit" name="submit" value="submit">
            <input type="reset" name="reset" value="reset">
        </form>
        <?php
        //}
        ?>
    </body>
</html>