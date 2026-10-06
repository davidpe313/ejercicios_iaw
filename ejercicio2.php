<?php
//Ejercicio 2. Agregar a la información de la edad de cada alumno, si la edad del alumno es par se pone en azul y si es impar en verde.
//Realizado a partir de la solucion del ejercicio 1.
$alumnos = [
    ['Atienza Bermúdez, Alejandro', 'm', '18'],
    ['Calderer Sánchez, Lucas', 'm', '19'],
    ['Cano Merino, Carlos', 'm', '18'],
    ['Chari, Abdelali', 'm', '19'],
    ['García Zarco, Francisco José', 'm', '19'],
    ['Gómez Pérez, Samuel', 'm', '19'],
    ['Iáñez Navarro, Daniel', 'm', '19'],
    ['López Lasheras, Alan', 'm', '20'],
    ['Maldonado Cabezas, Francisco', 'm', '19'],
    ['Martín Arias, Carlos', 'm', '18'],
    ['Moreno González, Alexandra', 'f', '19'],
    ['Muñoz Moreno, Elisabet', 'f', '29'],
    ['Ourhzif, Aymane', 'm', '19'],
    ['Sánchez Ortiz, Emilio David', 'm', '20'],
    ['Sánchez Rodríguez, Beatriz', 'f', '19'],
    ['Torres Gómez, Ignacio', 'm', '19'],
    ['Uréndez Jiménez, Alba', 'f', '18'],
    ['Uribe Aranda, Francisco', 'm', '19'],
    ['Velasco Clavero, Pablo', 'm', '18'],
];
//$alumnos[] = 'primer alumno';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Visualizando el array</h1>

        <table border = "1px">
            <tr>
                <td>#</td>
                <td>Alumno</td>
                <td>Género</td>
                <td>Edad</td>
            </tr>

            <?php
            $genero = null;
            foreach($alumnos as $indice =>  $alumno_info) {
                ?>
                <tr style="<?php
                if ($alumno_info[1]==="m") {
                    echo("color: green");
                } elseif ($alumno_info[1]==="f") {
                    echo("color: blue");
                }
                ?>">
                    <td><?= $indice ?></td>
                    <td><?= $alumno_info[0] ?></td>
                    <td><?= $alumno_info[1] ?></td>
                    <td style="<?php
                    if ($alumno_info[2]%2===0) {
                        echo("color: blue");
                    } else {
                        echo("color: green");
                    }
                    ?>"><?= $alumno_info[2] ?></td>
                </tr>
                <?php
            }
            ?>
        </table>

    </body>
</html>