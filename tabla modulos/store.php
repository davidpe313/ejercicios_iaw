<?php

// seeder: para poblar las tablas de mi aplicacion
// para disponer de datos iniciales

$host     = 'mysql';
$db       = 'siga';
$user     = 'sigauser';
$password = 'sigapassword';
$charset  = 'utf8mb4';

// Definición del Data Source Name (DSN)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Opciones de configuración de PDO para manejo de errores y seguridad
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// Si la ejecucion dentro del bloque falla, va al catch
try {
    $pdo = new PDO($dsn, $user, $password, $options);

    $campos = ['nombre', 'abreviatura', 'creditos', 'horas_semanales'];

    foreach ($campos as $campo) {
        if (!isset($_POST[$campo]) || trim($_POST[$campo]) === '') {
            header("Location: error.php");
            exit;
        }
    }

    // Sentencia preparada para evitar inyecciones SQL
    $sql = "INSERT INTO modulos (nombre, abreviatura, creditos, horas_semanales)
            VALUES (:nombre, :abreviatura, :creditos, :horas_semanales)";
    $sentencia_preparada = $pdo->prepare($sql);

    $datos = [
        'nombre'          => $_POST["nombre"],
        'abreviatura'     => $_POST["abreviatura"],
        'creditos'        => $_POST["creditos"],
        'horas_semanales' => $_POST["horas_semanales"],
    ];
    $sentencia_preparada->execute($datos);

    // Redireccion si todo va bien
    header('Location: exito.php');
    exit();
} catch (\Throwable $error) {
    echo 'Se ha producido un error, aquí más información: ';
    echo '<pre>' . var_export($error, true) . '</pre>';
}
?>