<?php  
// ---------------------------------------
final class Str{

	// ---------------------------------------

	/**
	 * Remueve los espacios de una cadena
	 * 
	 * @return $c - cadena a evaluar
	 * 
	 * @return devuelve el valor sin espacios
	 * 
	 */

	final public static function no_spaces($c){
		return str_replace(' ', '', $c);
	}

	// ---------------------------------------

	/**
	 * Encripta una cadena
	 * 
	 * @param string $cadena - Cadena a encriptar
	 * 
	 * @return un hash de la cadena requerida
	 */

	final public static function bcrypt($cadena){
		$salt = substr(base64_encode(openssl_random_pseudo_bytes('30')), 0,22);
		$salt = strtr($salt, array('+' => '.'));
		return crypt($cadena, '$2y$10$' . $salt);
	}

	// ---------------------------------------

	/**
	 * Compara una cadena con un hash
	 * 
	 * @param string $c - Cadena a comparar
	 * @param string $comp - Hash con el que se quiere comparar
	 * 
	 * @return true si coinciden, false en caso contrario
	 */
	final public static function ccrypt($c, $comp){
		return crypt($c, $comp) == $comp;
	}

	// ---------------------------------------

	/**
	 * Crea una url amigable a partir de un string
	 * 
	 * @param string $slug - url a convertir
	 * 
	 * @param un string convertido en url amigable
	 */

	final public static function slug($slug){
		$slug = strtolower($slug);
		$slug = str_replace(['á', 'é', 'í', 'ó', 'ú', 'ñ'],['a', 'e', 'i', 'o', 'u', 'n'], $slug);
		$slug = str_replace([' ', '\r\n', '\n', '+', '%', '\r', '&'], '-', $slug);

		return preg_replace(['/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/'], ['', '-', ''], $slug);
	}

	// ---------------------------------------

	final public static function redir($ruta){
		if (strpos($ruta,'http://') !== false || strpos($ruta,'https://') !== false) {
			header('location: '.$ruta);
			exit;
		}

		header('location: '.URL.$ruta);
	}


	// ---------------------------------------

	
}


?>