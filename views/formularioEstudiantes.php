<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos de la persona</h1>
    <form action="accionregistro.php" method="post">
        <div>
            <label>codigo:</label>
            <input type="text" name="codigo" require >
        </div>
        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre" require >
        </div>
        <div>
            <label>email: </label>
            <input type="text" name="Email" require >
        </div>
        <button type="submit">guardar </button>
    </form>
</body>
</html>