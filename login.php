<?php 
    session_start();
    require "conection_DB.php";
    if (!isset($_SESSION['cont_amenaza'])) {
        $_SESSION['cont_amenaza'] = 0;
    }
    
   

    if($_SERVER['REQUEST_METHOD']== "POST"){
        $username= $_POST['user'];
        $password= $_POST['password'];

        $stmt = $connection->prepare("SELECT password FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

    

        if($stmt->num_rows > 0){
            $stmt->bind_result($o_password);
            $stmt->fetch();

            if ($password === $o_password) {
                // Las credenciales son correctas
                $_SESSION['username'] = $username; // Guardar el nombre de usuario en la sesixón

                $consulta = $connection->prepare("SELECT rol FROM users WHERE username = ?");
                $consulta->bind_param("s", $username);
                $consulta->execute();
                $consulta->store_result();
                $consulta->bind_result($rol);
                $consulta->fetch();

                $_SESSION['rol']= $rol;
             
                $_SESSION['mensaje']= "Inicio de sesión exitoso. Bienvenido, " . htmlspecialchars($username) . " Rol: " . htmlspecialchars($rol);
   
                $_SESSION['cont_amenaza'] = 0;  
                header("Location:bienvenida.php");

            }

            else {
                $_SESSION['cont_amenaza']++;

                if($_SESSION['cont_amenaza'] >= 3 ){
                    $_SESSION['Amenaza']= "ATENCIÓN: Excedio el límite de intentos de sesión, este usuario será bloqueado ";
                    $_SESSION['cont_amenaza'] = 0;
                    header("Location: amenaza.php");
                    exit();
                }

                else{
                    // Guardar el mensaje de error en la sesión
                    $_SESSION['error'] = "Contraseña incorrecta.";
                    // Redirigir de nuevo a la página de login
                    header("Location: index.php");
                    exit(); // Asegúrate de salir después de redirig
                }
            }

        }

        else{
            echo "usuario no encontrado";
        }

        $stmt->close();
    }
    $connection->close();
?>