<?php
include __DIR__. '/models/estudiante.php';
include __DIR__. '/controllers/entityController.php';
include __DIR__. '/controllers/database/databaseController.php';
include __DIR__. '/controllers/estudiantes/estudianteController.php';

use App\controllers\estudiantes\EstudianteController;

$estudianteController = new EstudianteController();
$lista = $estudianteController -> allData();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estudiantes</title>
    <link rel="stylesheet" type="estudiantes_app/css" href="modelos.css">
</head>
<body>


<h1> lista estudiantes </h1>
    <table>
        <thead>
            <tr>
                <th>codigo</th>
                <th>nombre</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($lista as  $estudiante) {
                echo '<tr>';
                echo '  <td>'.$estudiante -> get ('codigo'). '</td>';
                echo '  <td>'.$estudiante -> get ('nombre'). '</td>';
                echo '  <td>'.$estudiante -> get ('email'). '</td>';
                echo '<tr>';
            }

            ?>
        </tbody>
    </table>
 
</body>
</html>
