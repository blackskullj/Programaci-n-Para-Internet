<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_metas";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Captura de Metas</title>
  </head>
  <body>
    <form action="form.php" method="post" id="goalsform">
      <fieldset>
        <legend>Metas</legend>
        <label for="meta">Meta:</label>
        <br />
        <input type="text" name="meta" placeholder="Escribe una meta" />
        <br />
        <br />
        <label for="descripcion">Descripción de la Meta:</label>
        <br />
        <textarea
          name="descripcion"
          cols="30"
          rows="5"
          form="goalsform"
          placeholder="Descripción..."
        ></textarea>
        <br />
        <br />
        <label for="plazo">¿A qué plazo quieres cumplir tu meta?</label>
        <br />
        <select name="plazo" form="goalsform">
          <optgroup label="Plazos">
            <option value="1">Corto Plazo</option>
            <option value="2">Mediano Plazo</option>
            <option value="3">Largo Plazo</option>
          </optgroup>
          <optgroup label="Años">
            <option value="4">Uno años</option>
            <option value="5">Tres años</option>
            <option value="6">Cinco años</option>
            <option value="7">Diez añosz</option>
          </optgroup>
        </select>
        <br />
        <br />
        <label for="indispensable">¿Es indispensable?</label>
        <br />
        <input type="radio" name="indispensable" value="si" /> Es indispensable
        <input type="radio" name="indispensable" value="no" /> Puedo vivir sin
        ello
        <br />
        <br />
        <label for="momento">¿Cuándo puedes realizarlo?</label>
        <br />
        <input type="checkbox" name="momento" value="antes" /> Antes de la
        Carrera <input type="checkbox" name="momento" value="durante" /> Durante
        la Carrera
        <input type="checkbox" name="momento" value="despues" /> Después de la
        Carrera
        <br />
        <br />
        <input type="hidden" name="codigo" value="1234" />
        <button type="submit">Enviar</button>
      </fieldset>
    </form>
    <hr />
    <?php
        if (count($_POST) > 0) {
            foreach ($_POST as $key => $value) {
                echo "$key :: $value <br />";
            }
    
            $meta = $_POST['meta'];
            $descripcion = $_POST['descripcion'];
            $plazo = $_POST['plazo'];

            //echo "<b /> Mi meta es $meta en un plazo de $plazo";

            $sql = "INSERT INTO mis_metas (meta, descripcion, plazo) VALUES ('$meta', '$descripcion', '$plazo')";
            $conn->exec($sql);
            echo "<h4> Meta creada </h4>";

        }
    ?>
  </body>
</html>