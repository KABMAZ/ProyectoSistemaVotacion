<?php
class PartidoControlador extends Partido{

	public function guardarDatos($con,$objPartido) {
		$variableSql = "INSERT INTO inscripcion_partido ";
		$variableSql .= "(id,Nombre,bandera,";
		$variableSql .= "Dui,representante) ";
		$variableSql .= "VALUES (";
		$variableSql.="'".$objPartido[0]."',";
		$variableSql.="'".$objPartido[1]."',";
		$variableSql.="'".$objPartido[2]."',";
		$variableSql.="'".$objPartido[3]."',";
		$variableSql.="'".$objPartido[4]."');";
		return consultaA($con, $variableSql);

		}

		public function modificarDatos($con,$objPartido) {
			$variableSql = "UPDATE inscripcion_partido SET ";
			$variableSql .= "Nombre = '".$objPartido[1]."'";
			$variableSql .= " ,bandera = '".$objPartido[2]."'";
			$variableSql .= " ,Dui = '".$objPartido[3]."'";
			$variableSql .= " ,representante = '".$objPartido[4]."'";
			$variableSql .= " WHERE id = ".$objPartido[0].";";
			return consultaA($con, $variableSql);

		}
}
