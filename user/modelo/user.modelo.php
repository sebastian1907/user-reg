<?php
require_once "conexion.php";
class ModeloUser{

	static public function mdlGetUser($username,$password){
		$db = new Conexion();
		$query = $db->consulta("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
		return $query->fetchAll();
	}

	static public function mdlCheckUser($username){
		$db = new Conexion();
		$query = $db->consulta("SELECT * FROM user WHERE username = '$username'");
		return $query->fetchAll();
	}

	static public function mdlSaveUser($username,$password,$nombre,$apellido){
		$db = new Conexion();
		$query = $db->consulta("INSERT INTO user (username, password, nombre, apellido) VALUES('$username', '$password', '$nombre', '$apellido')");
		if ($query) {
			return 1;
		}else{
			return 0;
		}
		// return $query;
	}
}