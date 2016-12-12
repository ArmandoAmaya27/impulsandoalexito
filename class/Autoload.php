<?php  

final class Autoload{
	final public static function autoloads(){
		self::clases();
		self::models();
	}

	final private function clases(){
		spl_autoload_register(function($r){
			$ruta = (AJAX ? '../../' : '') . 'class/'.$r. '.php';
			if (file_exists($ruta)) {
				require($ruta);
			}
		});
	}

	final private function models(){
		spl_autoload_register(function($r){
			$ruta = (AJAX ? '../' : 'app/') . 'models/'.$r.'.php';
			if (file_exists($ruta)) {
				require($ruta);
			}
		});
	}
}


?>