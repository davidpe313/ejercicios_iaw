<?php

// seeder: para poblar las tablas de mi aplicacion de mi aplicacion
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
    $sql1 = "insert into modulos 
                    values (null,
                            'Implantacion de Aplicaciones Web',
                            'IAW',
                            2.5,
                            8.5);";
    $pdo-> exec($sql1);
    echo ('insert 1 ok');
} catch (\Throwable $error) {
    echo ('Se ha producido un error, aquí más informacion: ');
    echo ('<pre>' . var_export($error, true) . '</pre>');
}
?>