<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3b</title>
</head>
<body>
    
    <?php 
    
        function OrderedNumber ($number) {

            $order = 1;
            for ($i = 1; $i <= $number; $i++) {

                for ($j = 1; $j <= $i; $j++) {

                    echo $order . " ";
                    $order++;

                }

                echo "<br>";

            }

        }

        echo OrderedNumber (6);
    
    ?>

</body>
</html>