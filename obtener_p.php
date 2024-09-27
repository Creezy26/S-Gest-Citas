<?php 

 
    require_once("roles_clase.php");

    $objrol = new roles();

    if($_SESSION['rol']== "odontologo"){

        $privilegio= $objrol->odontologo();
        $_SESSION['privilegio']=$privilegio;

    }

    elseif($_SESSION['rol']== "pediatra"){

        $privilegio= $objrol->pediatra();
        $_SESSION['privilegio']= $privilegio;
        
    }

    
    elseif($_SESSION['rol']== "general"){
        $privilegio= $objrol->general();
        $_SESSION['privilegio']= $privilegio;
        
    }

    
    elseif($_SESSION['rol']== "psiquiatra"){
        $privilegio= $objrol->psiquiatra();
        $_SESSION['privilegio']= $privilegio;
        
    }

    
    elseif($_SESSION['rol']== "paciente"){
        $privilegio= $objrol->paciente();
        $_SESSION['privilegio']= $privilegio;
        
    }


    
    elseif($_SESSION['rol']== "finanzas"){
        $prigilegio= $objrol->finanzas();
        $_SESSION['privilegio']= $privilegio;
        
    }

    
    elseif($_SESSION['rol']== "administrador"){
        $prigilegio= $objrol->admin();
        $_SESSION['privilegio']= $privilegio;
        
    }

?>