<?php
class VotanteControlador extends votante{

	public function guardarDatos($con,$objvotante) {
		$variableSql = "INSERT INTO registro_votante ";
		$variableSql .= "(id,Dui,Nombre,Apellido,Foto,Genero,Fecha_vencimiento,Direccion,id_depa,";
		$variableSql .= "id_muni) ";
		$variableSql .= "VALUES (";
		$variableSql.="'".$objvotante[0]."',";
		$variableSql.="'".$objvotante[1]."',";
		$variableSql.="'".$objvotante[2]."',";
		$variableSql.="'".$objvotante[3]."',";
		$variableSql.="'".$objvotante[4]."',";
		$variableSql.="'".$objvotante[5]."',";
		$variableSql.="'".$objvotante[6]."',";
		$variableSql.="'".$objvotante[7]."',";
		$variableSql.="'".$objvotante[8]."',";
		$variableSql.="'".$objvotante[9]."');";
		
		return consultaA($con, $variableSql);

		}

		public function modificarDatos($con,$objvotante) {
			$variableSql = "UPDATE registro_votante SET ";
			$variableSql .= "Dui = '".$objvotante[1]."'";
			$variableSql .= " ,Nombre = '".$objvotante[2]."'";
			$variableSql .= " ,Apellido = '".$objvotante[3]."'";
			$variableSql .= " ,Foto = '".$objvotante[4]."'";
			$variableSql .= " ,Genero = '".$objvotante[5]."'";
			$variableSql .= " ,Fecha_vencimiento = '".$objvotante[6]."'";
			$variableSql .= " ,Direccion= '".$objvotante[7]."'";
			$variableSql .= " ,id_depa = '".$objvotante[8]."'";
			$variableSql .= " ,id_muni = '".$objvotante[9]."'";
			$variableSql .= " WHERE id = ".$objvotante[0].";";
			return consultaA($con, $variableSql);

		}
}
