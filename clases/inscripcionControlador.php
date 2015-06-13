<?php
class inscripcionControlador extends inscripartido{
   
    public function guardarDatos($con,$objinscripcion) {
        $variableSql = "INSERT INTO inscri_partido ";
        $variableSql .= "(id_inscrip_parti,nombre_partido,bandera,";
        $variableSql .= "dui,representante) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objinscripcion[0]."',";
        $variableSql.="'".$objinscripcion[1]."',";
        $variableSql.="'".$objinscripcion[2]."',";
        $variableSql.="'".$objinscripcion[3]."',";
        $variableSql.="'".$objinscripcion[4]."');";       
        return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objinscripcion) {
        $variableSql = "UPDATE inscri_partido SET  ";
        $variableSql .= "nombre_partido = '".$objinscripcion[1]."'";
        $variableSql .= "  ,bandera = '".$objinscripcion[2]."'";
        $variableSql .= " ,dui = '".$objinscripcion[3]."'";
        $variableSql .= " ,representante = '".$objinscripcion[4]."'";
        $variableSql .= " WHERE id_inscrip_parti = ".$objinscripcion[0].";";                
        return consultaA($con, $variableSql);
        
        }
}