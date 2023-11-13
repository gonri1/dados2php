<?php

include("funciones/funciones.php");

$numeroDados = 5;

$arrayj1 = []; //almacenamos las jugadas de jugador 1, tirada 1
$arrayj12 = []; //almacenamos las jugadas de jugador 1, tirada 2
$arrayj13 = []; //almacenamos las jugadas de jugador 1, tirada 3
$arrayj14 = []; //almacenamos las jugadas de jugador 1, tirada 4

$arrayj2 = []; //almacenamos las jugadas de jugador 1, tirada 1
$arrayj22 = []; //almacenamos las jugadas de jugador 1, tirada 2
$arrayj23 = []; //almacenamos las jugadas de jugador 1, tirada 2
$arrayj24 = []; //almacenamos las jugadas de jugador 1, tirada 2


//tiradas jugador 1


while ($numeroDados > 0) {

    //tirada 1

    $numeroDados--;

    $numero1 = random_int(1, 6);
    array_push($arrayj1, $numero1);

    //Tirada 2

    $numero2 = random_int(1, 6);
    array_push($arrayj12, $numero2);

    //Tirada 3

    $numero5 = random_int(1, 6);
    array_push($arrayj13, $numero5);

    //Tirada 4

    $numero6 = random_int(1, 6);
    array_push($arrayj14, $numero6);
}


//tiradas jugador 2


$numeroDados = 5;

while ($numeroDados > 0) {

    $numeroDados--;

    //tirada 1

    $numero3 = random_int(1, 6);
    array_push($arrayj2, $numero3);

    //Tirada 2

    $numero4 = random_int(1, 6);
    array_push($arrayj22, $numero4);

    //tirada 3

    $numero7 = random_int(1, 6);
    array_push($arrayj23, $numero7);

    //Tirada 4

    $numero8 = random_int(1, 6);
    array_push($arrayj24, $numero8);
}

//Tratamos los totales de cada Jugador

$resultado1 = totalJugador($arrayj1, $arrayj12, $arrayj13, $arrayj14);
$resultado2 = totalJugador($arrayj2, $arrayj22, $arrayj23, $arrayj24);




?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego dados</title>
    <link rel="stylesheet" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
</head>

<body>
    <div class="container">

        <header>
            <h2>JUEGO DE LOS DADOS</h2>
            <p><span>Normas:</span></s> Cuatro tiradas, dos jugadores, gana el que mas puntos sume.</p>
            <div class="contenedor">
                <img src="imagenes/imgDados.jpg" alt="imagen generica de juego de dados" width="200px" height="200px">
                <img src="imagenes/imgDados.jpg" alt="imagen generica de juego de dados" width="200px" height="200px">
                <img src="imagenes/imgDados.jpg" alt="imagen generica de juego de dados" width="200px" height="200px">
                <img src="imagenes/imgDados.jpg" alt="imagen generica de juego de dados" width="200px" height="200px">
            </div>
        </header>

        <section>

            <article>
                <table id="tabla1" border="1">
                    <tr>
                        <th class="gene">JUGADOR 1</th>
                        <th class="gene">Parcial</th>
                        <th class="gene">Dados</th>
                    </tr>
                    <tr>
                        <th class="tirada">Tirada 1</th>
                        <th><?php echo parciales($arrayj1) ?></th>
                        <?= printDados($arrayj1); ?>

                    </tr>
                    <tr>
                        <th class="tirada">Tirada 2</th>
                        <th><?php echo parciales($arrayj12) ?></th>
                        <?= printDados($arrayj12); ?>
                    </tr>
                    <tr>
                        <th class="tirada">Tirada 3</th>
                        <th><?php echo parciales($arrayj13) ?></th>
                        <?= printDados($arrayj13); ?>
                    </tr>
                    <tr>
                        <th class="tirada">Tirada 4</th>
                        <th><?php echo parciales($arrayj14) ?></th>
                        <?= printDados($arrayj14); ?>
                    </tr>
                    <tr>
                        <th class="fin">Total Jugador 1 -> <?php echo totalJugador($arrayj1, $arrayj12, $arrayj13, $arrayj14) ?> Puntos</th>

                    </tr>
                </table>
            </article>

            <article>
                <table id="tabla2" border="1">
                    <tr>
                        <th class="gene2">JUGADOR 1</th>
                        <th class="gene2">Parcial</th>
                        <th class="gene2">Dados</th>
                    </tr>
                    <tr>
                        <th class="tirada">Tirada 1</th>
                        <th><?php echo parciales($arrayj2) ?></th>
                        <?= printDados($arrayj2); ?>
                    </tr>
                    <tr>
                        <th class="tirada">Tirada 2</th>
                        <th><?php echo parciales($arrayj22) ?></th>
                        <?= printDados($arrayj22); ?>
                    </tr>
                    <tr>
                        <th class="tirada">Tirada 3</th>
                        <th><?php echo parciales($arrayj23) ?></th>
                        <?= printDados($arrayj23); ?>
                    </tr>
                    <tr>
                        <th class="tirada">Tirada 4</th>
                        <th><?php echo parciales($arrayj24) ?></th>
                        <?= printDados($arrayj24); ?>
                    </tr>
                    <tr>
                        <th class="fin">Total Jugador 2 -> <?php echo totalJugador($arrayj2, $arrayj22, $arrayj23, $arrayj24) ?> Puntos</th>

                    </tr>
                </table>
            </article>
        </section>
        <h2 id="ganaJugador"><span>---<?php echo ganador($resultado1, $resultado2); ?>---</span></h2>
    </div>
</body>

</html>