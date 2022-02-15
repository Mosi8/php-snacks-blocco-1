<!-- Snack A
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php 

    $partita = [
        [
            'teamcasa' => 'Basket Napoli',
            'teamospiti' => 'Trieste',
            'punticasa' =>  89,
            'puntiospiti' => 82
        ],
        [
            'teamcasa' => 'Sassari',
            'teamospiti' => 'Brindisi',
            'punticasa' =>  102,
            'puntiospiti' => 75
        ],
        [
            'teamcasa' => 'Venezia',
            'teamospiti' => 'Brescia',
            'punticasa' =>  82,
            'puntiospiti' => 93
        ],
        [
            'teamcasa' => 'Pesaro',
            'teamospiti' => 'Treviso',
            'punticasa' =>  105,
            'puntiospiti' => 108
        ],
        [
            'teamcasa' => 'Varese',
            'teamospiti' => 'Trento',
            'punticasa' =>  90,
            'puntiospiti' => 89
        ],
        [
            'teamcasa' => 'Olimpia Milano',
            'teamospiti' => 'Fortitudo Bologna',
            'punticasa' =>  74,
            'puntiospiti' => 64
        ],
        [
            'teamcasa' => 'Tortona',
            'teamospiti' => 'Reggiana',
            'punticasa' =>  93,
            'puntiospiti' => 98
        ],
        [
            'teamcasa' => 'Virtus Bologna',
            'teamospiti' => 'Cremona',
            'punticasa' =>  79,
            'puntiospiti' => 71
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        for ($i=0; $i < count($partita); $i++) { 
            echo "<p>".$partita[$i]['teamcasa']." - ".$partita[$i]['teamospiti']." | ".$partita[$i]['punticasa']." - ".$partita[$i]['puntiospiti']."<p>"."<br>";
        }

        ?>
    </body>
</html>