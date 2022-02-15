<!-- Snack D
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$testo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam orci nisl, maximus ut mauris quis, accumsan ultricies libero. Nam sagittis quam quis odio rutrum pulvinar. Cras sollicitudin lorem quis neque hendrerit interdum. Aenean at turpis purus. Suspendisse potenti. Pellentesque eu congue ipsum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce rutrum ultricies ex, sit amet malesuada urna molestie eget. Nullam dapibus leo eget urna condimentum gravida. Vivamus sit amet faucibus felis, et suscipit arcu. Sed finibus, nisl nec consequat sagittis, ante arcu consequat lectus, et rutrum ex ante eget elit. Mauris vel efficitur quam, a imperdiet lorem. Etiam pellentesque nibh eros, eget placerat diam vehicula vitae.";
$array = explode(".", $testo);


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack D</title>
    </head>
    <body>
        <?php
        for ($i=0; $i < count($array)-1; $i++) { 
            echo $array[$i].".<br>";
        }

        ?>
    </body>
</html>