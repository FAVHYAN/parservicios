<?php

class Model
{
	protected $table;
	protected $primaryKey = "idCliente";

	public static function find($idCliente)
	{

		$model = new static();
		$sql = "SELECT * FROM ".$model->table." where ".$model->primaryKey."=".$idCliente;

		$result = DB::querySinParametros($sql);

		foreach ($result as $key => $value) 
		{
			$model->$key = $value;
		}
		return $model;
	}
 	

		public static function insertar($data)
	{
			
			 $model = new static();


			 $sql = "INSERT INTO ".$model->table."(nomCliente,emailCliente,contrasena)  VALUES ('".$data['nombre']."','".$data['email']."','".$data['contrasena']."')";
		 		$result = DB::queryInsertar($sql);
		 		return $result;
	}		
	public static function insertarOperario($data)
	{
			
			 $model = new static();


			 $sql = "INSERT INTO ".$model->table."(nomUsuario,emUsuario,contrasena)  VALUES ('".$data['nombre']."','".$data['email']."','".$data['contrasena']."')";
		 		$result = DB::queryInsertar($sql);
		 		return $result;
	}
	

}