<?php  
// ---------------------------------
final class Fl{

	// ---------------------------------
	/**
	 * Obtiene un la extension de un archivo
	 * 
	 * @param string $file - nombre del archivo
	 * 
	 * @return la extension del archivo
	 */
	final public static function fext($file){
		return pathinfo($file, PATHINFO_EXTENSION);
	}
	// ---------------------------------

	/**
	 * Crea un arreglo secuencial con los archivos en sus directorios
	 * 
	 * @param string $dir - Directorio en el que se quiere buscar
	 * 
	 * @param string|string $tipo - Tipo de archivo
	 * 
	 * @return un arreglo con los archivos y sus diretorios
	 */

	final public static function fspath($dir, $tipo = ''){
		$files = array();
		if (is_dir($dir)) {
			foreach (glob($dir . '*' . $tipo) as $f) {
				$files[] = $f;
			}
		}
		return $files;
	}

	// ---------------------------------

	/**
	 * Crea un directorio
	 * 
	 * @param string $dir - directorio a crear
	 * @param $p - Permisos para crear el directorio
	 * 
	 * @return true si fue creado, false en caso contrario
	 */

	final public static function makeDir($dir, $p = 0777){
		if (is_dir($dir)) {
			return false;
		}
		return mkdir($dir, $p, true);
	}

	// ---------------------------------

	/**
	 * Elimina un directorio con sus archivos
	 * 
	 * @param string $directorio - Directorio a eliminar
	 * 
	 * @return true si se eliminó de forma exitosa
	 */

	final public static function removeDir($directorio){
		if (!file_exists($directorio)) {
			return rmdir($directorio);
		}else if(!is_dir($directorio)){
			return new \RuntimeException($directorio.' No es un directorio.');
		}

		if (!is_link($directorio)) {
			foreach (scandir($directorio) as $f) {
				if ($f === '.' || $f === '..') {
					continue;
				}
				$path = $directorio . '/' . $f;
				if (is_dir($path)) {
					self::removeDir($path);
				}else if(!unlink($path)){
					throw new \RuntimeException('No se pudo eliminar '.$path);
				}
			}
			return rmdir($directorio);
		}
		
	}
}
?>