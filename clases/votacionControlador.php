<?php
class VotacionControlador extends Votacion{
   
    public function guardarDatos($con,$objAlumno) {
        $variableSql = "INSERT INTO voto ";
        $variableSql .= "(id,nombre_partido,candidatura) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objAlumno[0]."',";
        $variableSql.="'".$objAlumno[1]."',";
        $variableSql.="'".$objAlumno[2]."');";        
        return consultaA($con, $variableSql);
        
        }

        
    }