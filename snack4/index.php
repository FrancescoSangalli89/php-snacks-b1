<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

    <!-- Creare un array con 15 numeri casuali, 
    tenendo conto che l’array non dovrà contenere 
    lo stesso numero più di una volta -->

        <?php

        $totNumbers = 15;

        $myArray = getArrayOfRandomNumbers($totNumbers);

        function getArrayOfRandomNumbers($numbers) {

            $arrayOfNumbers = [];

            while (count($arrayOfNumbers) < $numbers) {

                $number = rand();

                if (!in_array($number, $arrayOfNumbers)) {
                    $arrayOfNumbers[] = $number;
                }
            }

            return $arrayOfNumbers;
        }
        

        var_dump($myArray);
        print_r($myArray);

        ?>

        <ul>
            <?php

                for ($i=0; $i < count($myArray); $i++) {
                    
                    echo "<li>" . $myArray[$i] . "</li>";
                    
                }

            ?>
        </ul>

    </body>
</html>