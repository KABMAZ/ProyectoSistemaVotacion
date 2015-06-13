<?php
class CandidatoControlador extends Candidato{
   
    public function guardarDatos($con,$objAlumno) {
        $variableSql = "INSERT INTO inscripcion_cand ";
        $variableSql .= "(id,Dui,Apellido,Nombre,Departamento,Municipio,";
        $variableSql .= "Candidatura) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objAlumno[0]."',";
        $variableSql.="'".$objAlumno[1]."',";
        $variableSql.="'".$objAlumno[2]."',";
        $variableSql.="'".$objAlumno[3]."',";
        $variableSql.="'".$objAlumno[4]."',";
        $variableSql.="'".$objAlumno[5]."',";
        $variableSql.="'".$objAlumno[6]."');";  
        return consultaA($con, $variableSql);
        
        }

       public function modificarDatos($con,$objAlumno) {
        $variableSql = "UPDATE inscripcion_cand SET  ";
        $variableSql .= "Dui = '".$objAlumno[1]."'";
        $variableSql .= "  ,Apellido = '".$objAlumno[2]."'";
        $variableSql .= " ,Nombre = '".$objAlumno[3]."'";
        $variableSql .= " ,Departamento = '".$objAlumno[4]."'";
        $variableSql .= " ,Municipio = '".$objAlumno[5]."'";
        $variableSql .= " ,Candidatura = '".$objAlumno[6]."'";
        $variableSql .= " WHERE id = ".$objAlumno[0].";";                
        return consultaA($con, $variableSql);
        
        }
       
}