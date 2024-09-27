<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_bienvenida.css">
    <title>Document</title>
</head>
<body>
    <h1>Registro de citas</h1>
    <div>
        <?php 
            session_start();
            require_once('obtener_p.php');
            echo $_SESSION['mensaje']. "<br>";
            echo $_SESSION['privilegio'];
        ?>
        
    </div>
    
    <br>
    <button><a href="index.php">Volver</a></button>
    
</body>
</html>