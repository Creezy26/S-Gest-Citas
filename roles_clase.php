<?php 

    class roles{
       

        public function odontologo(){
            return "sus privilegios son: observar la información de los pacientes de odontología, solo tiene permiso de lectura de la información";
        }

        public function pediatra(){
            return "sus privilegios son: observar la información de los pacientes de odontología, solo tiene permiso de lectura de la información";
        }

        public function general(){
            return "sus privilegios son: observar la información de los pacientes de medicina general, solo tiene permiso de lectura de la información";
        }

        public function psiquiatra(){
            return "sus privilegios son: observar la información de los pacientes de psiquiatría, solo tiene permiso de lectura de la información";
        }

        public function paciente(){
            return "sus privilegios son: podrá realizar solicitutes de su cita, la fecha en la que debe asistir, el doctor que lo atenderá y ver su información personal de su cuenta creada";
        }

        public function finanzas(){
            return "podrá observar infomación sobre la entrada y salida en la sección de finanzas, solo tendrá permosos de lectura";
        }

        public function admin(){
            return "podrá crear o bloquear cuentas, agregar o disminuir privilegios, no podrá manipular información sencible de los demas sectores del software manejado por otros roles.";
            
        }

    }

?>