<?php
	
	define('DB_SERVER','localhost');
	define('DB_USER','root');
	define('DB_PASS' ,'');
	define('DB_NAME', 'pruebas');

	class Conexion{

		function __construct()
		{
			$conn = mysql_connect(DB_SERVER,DB_USER,DB_PASS) or die('localhost connection problem'.mysql_error());
  			mysql_select_db(DB_NAME, $conn);
		}

		public function insert($e, $ap, $am, $te, $apod){

			$res = mysql_query("INSERT personas(email,app,apm,tel,apodo) VALUES('$e','$ap','$am','$te','$apod')");
  			return $res;

		}

	}

?>