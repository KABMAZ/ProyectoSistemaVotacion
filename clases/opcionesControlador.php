<?php
class opcionesControlador extends cargo{
   
    public function guardarDatos($con,$objopciones) {
        $variableSql = "INSERT INTO cargo ";
        $variableSql .= "(id_cargo,tipo_cargo,year_electoral) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objopciones[0]."',";
        $variableSql.="'".$objopciones[1]."',";
        $variableSql.="'".$objopciones[2]."');";       
        return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objopciones) {
        $variableSql = "UPDATE cargo SET  ";
        $variableSql .= "tipo_cargo = '".$objopciones[1]."'";
        $variableSql .= " ,year_electoral = '".$objopciones[2]."'";
        $variableSql .= " WHERE id_cargo = ".$objopciones[0].";";                
        return consultaA($con, $variableSql);
        
        }
}