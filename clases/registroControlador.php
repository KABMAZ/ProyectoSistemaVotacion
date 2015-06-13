<?php
class RegistroControlador extends registrovotante{
   
    public function guardarDatos($con,$objregistro) {
        $variableSql = "INSERT INTO registro_votante";
        $variableSql .= "(id_votante,dui,nombre,apellido";
        $variableSql .= "foto,genero,fecha_venci,direccion,";
        $variableSql .= "id_depa,id_muni) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objregistro[0]."',";
        $variableSql.="'".$objregistro[1]."',";
        $variableSql.="'".$objregistro[2]."',";
        $variableSql.="'".$objregistro[3]."',";
        $variableSql.="'".$objregistro[4]."',";
        $variableSql.="'".$objregistro[5]."',";
        $variableSql.="'".$objregistro[6]."',";
        $variableSql.="'".$objregistro[7]."',";
        $variableSql.="'".$objregistro[8]."',";
        $variableSql.="'".$objregistro[9]."');";        
        return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objregistro) {
        $variableSql = "UPDATE registro_votante SET  ";
        $variableSql .= "dui = '".$objregistro[1]."'";
        $variableSql .= "  ,nombre = '".$objregistro[2]."'";
        $variableSql .= " ,apellido = '".$objregistro[3]."'";
        $variableSql .= " ,foto = '".$objregistro[4]."'";
        $variableSql .= " ,genero = '".$objregistro[5]."'";
        $variableSql .= " ,fecha_venci = '".$objregistro[6]."'";
        $variableSql .= " ,direccion = '".$objregistro[7]."'";
        $variableSql .= " ,id_depa = '".$objregistro[8]."'";
        $variableSql .= " ,id_muni = '".$objregistro[9]."'";
        $variableSql .= " WHERE id_votante = ".$objregistro[0].";";                
        return consultaA($con, $variableSql);
        
        }
}