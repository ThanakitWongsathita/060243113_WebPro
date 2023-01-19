<html>
    <head>
        <title>แสดงการสร้างและใช้ฟังก์ชั่น</title>
    </head>

    <body>
        <?php
            function say_Hello() 
            {
                echo "Hello PHP<br>";
            }
        ?>

        <h2>
        <?php
            
            function pluse($n1,$n2)
            {
                $pluseSum=$n1+$n2;
                return $pluseSum;
            }
            function minus($n1,$n2=50)
            {
                $sum=$n1-$n2;
                echo "Result of minus is : ".$sum."<br>";
            }
            function multiply($n1,$n2,&$sum)
            {
                $sum=$n1*$n2;
            }
            
            $num1=20;
            $num2=10;
            $multSum=0;
            $pluseSum = pluse($num1,$num2);
            
            echo "Result of pluse is : ".$pluseSum."<br>";
            minus($num1);
            multiply($num1,$num2,$multSum);
            echo "Result of multiply is : ".$multSum."<br>"
        ?>
        </h2>
        
        <h2> การเรียกฟังก์ชั่นครั้งที่ 1 : </h2>
        <?php
            say_Hello();
        ?>
        <hr/>

        <h2> การเรียกฟังก์ชั่นครั้งที่ 2 : </h2>
        <?php
            Say_Hello();
        ?>
        <hr/>

        <h2> การเรียกฟังก์ชั่นครั้งที่ 3 : </h2>
        <?php
            Say_hello();
        ?>
    </body>
</html