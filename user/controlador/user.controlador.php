<?php
class ControladorUser{
	/*=============================================
	LOGIN
	=============================================*/
	static public function ctrIngresoUser(){
		if(isset($_POST["accion"]) && $_POST["accion"] == "getUser"){
			//$encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
			$usuario = $_POST["user"];
			$password = $_POST["password"];
			$hashed_password = crypt($password,'SHA-256');

			$respuesta = ModeloUser::mdlGetUser($usuario,$hashed_password);
			if($respuesta != null){
				if($respuesta[0]->username == $_POST["user"] && $respuesta[0]->password == $hashed_password){
					session_start();
					$_SESSION["id"] = $respuesta[0]->id;
					$_SESSION["user"] = $respuesta[0]->username;
					$_SESSION["nombre"] = $respuesta[0]->nombre;
					$_SESSION["apellido"] = $respuesta[0]->apellido;
					return 1;

				}else{
					return 0;
				}
			}else{
				return 0;
			}
		}
	}

	static public function ctrSaveUser(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hashed_password = crypt($password,'SHA-256');
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];

		$verification = ModeloUser::mdlCheckUser($username);
		if ($verification != null) {
			$datos = array("cod" => 0, "username" => $verification[0]->username);
			return $datos;
		}else{
			$respuesta = ModeloUser::mdlSaveUser($username,$hashed_password,$nombre,$apellido);
			$datos = array("cod" => $respuesta);
			return $datos;
		}
		
	}
}