<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejemplo</title>
</head>
<body>
    <h1>Hola HTML!!!</h1>

    <?php echo "HOLA MUNDO PHP!!!"; ?>
    <hr>
    <?php
        echo "HOLA 1 <br />";
        echo "HOLA 2 <br />";
    ?>
    <hr>
    <?php
        $pi = 3.14;
        $x = 5;
        $resultado = $pi * $x;
         echo 'Resultado: ' . $resultado . '<br />';
         echo "Resultado: $resultado <br />"
    ?>
    <ul>
    <?php
        // echo "<ul>";
            for($i = 0; $i < 5; $i++){
                echo "<li>Elemento $i</li>";
            }
        // echo "</ul>"
    ?>
    </ul>
    <hr>
    <?php
        $miArreglo = array(); //Declaración
        $alumnos = ['Juan', 'Laura', 'María'];
        $alumno = [
            'nombre' => 'Juan',
            'codigo' => 1234
        ];
        $alumnos2 [] = 'Antonio';
        $alumnos2 [] = 'Oscar';
        $alumnos2 [] = 'Omar';

        // var_dump($alumnos2);

        // foreach ($alumnos as $alumno) {
        //     echo "$alumno <br />";
        // }
        foreach ($alumno as $key => $value) {
            echo "$key : $value <br />";
        }
    ?>
</body>
</html>