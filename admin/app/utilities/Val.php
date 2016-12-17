<?php
 // ---------------------------------------
 final class Val{

     // ---------------------------------------

     /**
      * Comprueba que una cURL sea válida
      * 
      * @param string $url - cadena a evaluar
      * 
      * @return true si es url, false en caso contrario
      */

    final public static function Url($url){
         $url = filter_var($url, FILTER_SANITIZE_URL);
         return filter_var($url, FILTER_VALIDATE_URL) == false ? false : true;
     }

     // ---------------------------------------

     /**
      * Comprueba que una cadena sea un email
      * 
      * @param string $email - cadena a evaluar
      * 
      * @return true si es email, false en caso contrario
      */

    final public static function Email($email){
         return filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;
     }

     // ---------------------------------------

     /**
      * Comprueba que una cadena sea alfanumérica
      * @param string $c - cadena a evaluar
      * 
      * @return true si es alfanumérica, false en caso contrario
      */

    final public static function Alphanum($c){
    	return ctype_alnum($c);
    }
    // ---------------------------------------

    /**
     * Comprueba que una cadena sea solo letras
     * 
     * @param string $c - Cadena a evaluar
     * 
     * @return true si solo es letra, false en caso contrario
     */

    final public static function Letters($c){
        $c = str_replace(' ', '', $c);
    	return ctype_alpha($c);
    }

    // ---------------------------------------

    /**
     * Comprueba que una cadena no esté vacía
     * 
     * @param string $c - Cadena a evaluar
     * 
     * @return true si está vacía, false en caso contrario
     */

    final public static function isEmpty($c){
    	return empty(trim(str_replace(' ', '', $c)));
    }
    // ---------------------------------------

    /**
     * Comprueba que sea un numero
     * 
     * @param $n - numero a evaluar
     * 
     * @return true si es numérico, false en caso contrario
     */
    
    final public static function isNumeric($n){
    	return is_numeric($n);
    }
    // ---------------------------------------

    /**
     * Comprueba que todos los elementos de un arreglo esten llenos
     * 
     * @param array $a - arreglo a evaluar
     * 
     * @return true si no hay elementos vacíos, false en caso contrario
     */
    final public static function fullArray($a){
    	foreach ($a as $v) {
    		if (self::isEmpty($v)) {
    			return false;
    		}
    	}
    	return true;
    }

    // ---------------------------------------

    /**
     * Comprueba que haya un elemento vacío pasado por parametro
     * 
     * @return true si hay un elemento vacío, false en caso contrario
     * 
     */

    final public static function oneEmpty(){
    	for ($i = 0, $args = func_num_args(); $i < $args; $i++) { 
    		if (self::isEmpty(func_get_arg($i)) && func_get_arg($i) != '0') {
    			return true;
    		}
    	}	
    	return false;
    }

    // ---------------------------------------
    
 }




?>
