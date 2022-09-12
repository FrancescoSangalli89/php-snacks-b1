<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una 
chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, 
altrimenti “Accesso negato” -->

    <?php

        $allert = "";

        //voglio verificare se nella email da controllare è presente il simbolo @ e il .
        if (isset($_GET['name'], $_GET['mail'], $_GET['age'])) {

            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];

            //verifico che il nome fornito abbia più di tre lettere
            if (strlen($name) > 3) {
                
                //verifico che l'indirizzo email fornito è valido
                if (strpos($mail, '@') !== false && strpos($mail, '.') !== false) {

                    //verifico che l'età sia un numero
                    if (is_numeric($age) && $age >= 18) {
                        $allert = "Accesso riuscito";

                    } else {
                        $allert = "Accesso negato!";
                    }

                } else {
                    $allert = "Email non valida!";
                }

            } else {
                $allert = "Il nome deve contenere più di 3 caratteri!";
            }

        } else {
            $allert =  "Hai dimenticato qualche parametro";
        }
    ?>

<div><?php echo $allert;?></div>

</body>
</html>