<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

    <?php


    $students = [
        [
            'name' => 'Francesco',
            'surname' => 'Sangalli',
            'votes' => [
                6, 6.5, 7, 5
            ]
        ],
        [
            'name' => 'Stefano',
            'surname' => 'Speroni',
            'votes' => [
                8, 7.5, 7, 4.5
            ]
        ],
        [
            'name' => 'Ilaria',
            'surname' => 'Cerelli',
            'votes' => [
                7, 9.5, 10, 8
            ]
        ]
    ];

    ?>

    <ul>
        <?php
            for ($i=0; $i < count($students); $i++) { 
            
                $student = $students[$i];
        
                $average = array_sum($student['votes'])/count($student['votes']);
        
                echo "<li>" . $student['name'] . " " . $student['surname'] . " : " . "media voto => " . $average . "</li>";
        
            }
        ?>
    </ul>

</body>
</html>