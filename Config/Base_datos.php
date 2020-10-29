<?php namespace Config;



 class base_datos 
 {
 	
 	
 	public static function conectar()
	{

		$conexion= new \MySQLi("localhost", "root", "", "movie_pass");
		
		if($conexion->connect_errno)
		{
			echo "Fallo la conexion a la bdd". $conexion->connect_errno;
		}

		$conexion->set_charset("utf8");

		return $conexion;
	}

	public static function comprobar_query($conexion, $sql)
	{
		if ($conexion->query($sql)===TRUE)
		{
			$resultado['success']=TRUE;
			$resultado['message']="Envio exitosamente";
		}
		else
		{
			$resultado['success']=FALSE;
			$resultado['message']="Error: ".$sql."<br>". $conexion->error;
		}

		return $resultado;
	}




 } ?>