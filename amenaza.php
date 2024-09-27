<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_amenaza.css">
    <title>Document</title>
</head>
<body>

    <div class="mensajeAmenaza">

        <?php 
            session_start();

            if(isset($_SESSION['Amenaza'])){

                echo "<p style='color:black;'>" . htmlspecialchars($_SESSION['Amenaza']) . "</p>";

            }
        ?>
    </div>
    
</body>
</html>