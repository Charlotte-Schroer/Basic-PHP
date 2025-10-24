<?php
declare(strict_types=1);
include "geometry.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Basic PHP oefeningen</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>

<body class="p-4">
    <div class="container">
        <h1>Pick Your Exercise</h1>
        <div class="mb-4">
            <select class="form-control" id="list">
                <option value="" selected disabled hidden="">--Kies een oefening--</option>
                <option value="1">Oefening 1</option>
                <option value="2">Oefening 2</option>
                <option value="3">Oefening 3</option>
                <option value="4">Oefening 4</option>
                <option value="5">Oefening 5</option>
                <option value="6">Oefening 6</option>
                <option value="7">Oefening 7</option>
                <option value="8">Oefening 8</option>
                <option value="9">Oefening 9</option>
                <option value="10">Oefening 10</option>
                <option value="11">Oefening 11</option>
                <option value="12">Oefening 12</option>
                <option value="13">Oefening 13</option>
                <option value="14">Oefening 14</option>
            </select>
        </div>
        <div class="mb-4" id="ex1">
            <h1>Dit is oefening 1: Constante en Functie</h1>
            <p>De oppervlakte van een cirkel met straal 2.2 is: <?php echo calculateSurfaceAreaCircle(2.2); ?></p>
        </div>
        <div class="mb-4" id="ex2">
            <h1>Dit is oefening 2: Meetkunde</h1>
            <p>De oppervlakte van een driehoek met als basis 6 en hoogte 3 is: <?php echo calculateSurfaceAreaTriangle(6,3); ?>.</p>
            <p>De oppervlakte van een vierkant met een zijde van 8 is: <?php echo calculateSurfaceAreaSquare(8); ?>.</p>
            <p>De oppervlakte van een rechthoek met als breedte 5 en hoogte 12 is: <?php echo calculateSurfaceAreaRectangle(5,12); ?>.</p>
        </div>
        <div class="mb-4" id="ex3">
            <h1>There is no such thing as exercise 3</h1>
        </div>
        <div class="mb-4" id="ex4">
            <h1>Dit is oefening 4: Variabelen</h1>
            <?php
            $variable1=0;
            //$variable2=0;
            $variable3="";
            $variable4=986;

            if(isset($variable1)){?>
                <p>Variable 1 is OK!</p>
            <?php }
            if (isset($variable2)){?>
                <p>Variable 2 is OK!</p>
            <?php }
            if (empty($variable3)){?>
                <p>Variable 3 is OK!</p>
            <?php }
            if (empty($variable4)){?>
            <p>Variable 4 is OK!</p>
            <?php }
            ?>
        </div>
        <div class="mb-4" id="ex5">
            <h1>Dit is oefening 5: Controlestructuren</h1>
            <?php
            $nummer=10;
            $return=0;
            switch ($nummer) {
                case 10:
                    $return=10;
                    break;
                case 20:
                    $return=20;
                    break;
                case 30:
                    $return=30;
                    break;
            }
            ?>
            <p>Het nummer is gelijk aan <?= $return ?></p>
        </div>
        <div class="mb-4" id="ex6">
            <h1>Dit is oefening 6: Controlestructuren</h1>
            <?php
            $som=0;
            for ($i = 1; $i <= 30; $i++) {
                $som+=$i;
                ?> <p> <?php echo $som ?> </p> <?php
            }
            ?>
        </div>
        <div class="mb-4" id="ex7">
            <h1>Dit is oefening 7</h1>
        </div>
        <div class="mb-4" id="ex8">
            <h1>Dit is oefening 8</h1>
        </div>
        <div class="mb-4" id="ex9">
            <h1>Dit is oefening 9</h1>
        </div>
        <div class="mb-4" id="ex10">
            <h1>Dit is oefening 10</h1>
        </div>
        <div class="mb-4" id="ex11">
            <h1>Dit is oefening 11</h1>
        </div>
        <div class="mb-4" id="ex12">
            <h1>Dit is oefening 12</h1>
        </div>
        <div class="mb-4" id="ex13">
            <h1>Dit is oefening 13</h1>
        </div>
        <div class="mb-4" id="ex14">
            <h1>Dit is oefening 14</h1>
        </div>
    </div>








<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="script.js" defer></script>
</body>
</html>