<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Clinica Nacional Socy</title>
</head>

<body>
    <div id="container">
        <div id="containter__login">
            <h1 id="login-tittle">Citas médicas</h1>
            
            <form action="login.php" method="post">
                <input type="text" class="login_input"  placeholder="User" id="user" name="user" required >
                <input type="password" class="login_input" placeholder="Password" id="password" name="password" required>
                <input type="submit" class="login_input" id="">
            </form>

        </div>
        <?php 
             
            session_start();
            
            // Mostrar mensaje de error si existe
            if (isset($_SESSION['error'])) {
                echo "<p style='color:red;'>" . htmlspecialchars($_SESSION['error']) . "</p>";
                // Limpiar el mensaje de error después de mostrarlo
                unset($_SESSION['error']);
            }

            
        ?>

    </div>
    
</body>
</html>