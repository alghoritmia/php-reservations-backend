<?php

Class Conexion{

	static public function conectar(){


		$link = new PDO("mysql:host=localhost;dbname=DBNAME",
						"USERDB",
						"PASSDB");							

		$link->exec("set names utf8");

		return $link;

	}


}