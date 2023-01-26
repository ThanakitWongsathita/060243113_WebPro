<html>
    <head>
        <title>การเรียงค่า</title>
    </head>

    <body>
        
        <form action="ex2.php" method="post" name="exFrom2" id="exFrom2">
            <h2>Enter participants scores</h2>
            P1<input type="text" name="num[]"><br>
            P2<input type="text" name="num[]"><br>
            P3<input type="text" name="num[]"><br>
            P4<input type="text" name="num[]"><br>
            P5<input type="text" name="num[]"><br>
            <input type="submit" name="submit" value="submit">
            <input type="reset" name="reset" value="reset">
            <hr>
        </form>
        <?php  
        if (isset($_POST['submit']))
        {
            echo "<big>Result</big><br>";
            $n = $_POST['num'];
            $sum = 0;
            $countNum = count($n);
            rsort($n);
            echo "Max to Min : ";
            for($i=0;$i<$countNum;$i++)
            {
                echo $n[$i].",";
                $sum = $sum + $n[$i];
            }
            echo "<br>Max : ".max($n)."<br>";
            echo "Min : ".min($n)."<br>";
            echo "Sum : $sum<br>";
        }
        ?>
    </body>
</html>