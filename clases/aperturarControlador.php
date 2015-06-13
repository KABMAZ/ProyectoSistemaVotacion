<?php
class AperturarControlador extends cargo {
   
    public function guardarDatos($con,$objAlumno) {
        $variableSql = "INSERT INTO aperturar ";
        $variableSql.= "(id,tipo,year) ";
        $variableSql.= "VALUES (";
        $variableSql.="'".$objAlumno[0]."',";
        $variableSql.="'".$objAlumno[1]."',";
        $variableSql.="'".$objAlumno[2]."');";        
        return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objAlumno) {
        $variableSql = " UPDATE cargo SET  ";
        $variableSql .= "  ,Tipocargo = '".$objAlumno[1]."'";
        $variableSql .= " ,Anoefectuar = '".$objAlumno[2]."'";
        $variableSql .= " WHERE id = ".$objAlumno[0].";";                
        return consultaA($con, $variableSql);
        
        }
}

