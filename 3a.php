<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3a</title>
</head>
<body>
    
    <?php 
    
        function countCircularArea ($r) {

            $r = 3.14 * $r * $r;
            return $r;

        }

        function Circumference ($d) {

            $d = 3.14 * $d * 2;
            return $d;

        }


        //Luas Lingkaran

        echo "<h4> Menghitung Luas Lingkaran </h4>";

        echo "Jari-jari: 12 cm <br>";
        echo "Luas lingkaran: ";
        echo countCircularArea (12);
        echo " cm²";
        
        echo "<hr>";
        
        //Keliling Lingkaran

        echo "<h4> Menghitung Keliling Lingkaran </h4>";

        echo "Jari-jari: 20 cm <br>";
        echo "Keliling lingkaran: ";
        echo Circumference (20);
        echo " cm";
    
    ?>

</body>
</html>