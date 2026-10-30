<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de modulos</title>
</head>

<body>
    <h1>Alta de modulos</h1>
    <form action="store.php" method="post">
       <label for="nombre">Nombre:</label>
       <input type="text" name="nombre" id="nombre" placeholder="Ej. Implementacion de Aplicaciones Web" required
              minlength="2" maxlength="100">
       <br>

       <label for="abreviatura">Abreviatura:</label>
       <input type="text" name="abreviatura" id="abreviatura" placeholder="Ej. IAW" required maxlength="5">
       <br>

       <label for="creditos">Creditos:</label>
       <input type="number" name="creditos" id="creditos" step="0.01" min="0" max="99.99" required>

       <br>
       <label for="horas_semanales">Horas semanales::</label>
       <input type="number" name="horas_semanales" id="horas_semanales" step="0.01" min="0" max="168" required>
       <br>

       <button type="submit">Alta modulo</button>
    </form>
</body>

</html>