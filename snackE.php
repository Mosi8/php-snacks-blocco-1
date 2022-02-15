<!-- Snack E
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
    $alunni = [
        [
            'nome' => 'Matteo',
            'cognome' => 'Rossi',
            'voti' => [7, 9, 5, 9]
        ],
        [
            'nome' => 'Nicola',
            'cognome' => 'Botte',
            'voti' => [4, 8, 5, 10]
        ],
        [
            'nome' => 'Federico',
            'cognome' => 'Angular',
            'voti' => [3, 6, 5, 4]
        ]
        ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack E</title>
    </head>
    <body>
        <?php
        for ($i=0; $i < count($alunni); $i++) { 
            echo "<p>".$alunni[$i]['nome']."  ".$alunni[$i]['cognome']." media voto: ".(array_sum($alunni[$i]['voti'])/count($alunni[$i]['voti']))."<br>";
        }

        ?>
    </body>
</html>