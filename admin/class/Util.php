<?php  

final class Util{


	final public static function Requir($file){

		if (is_array($file)) {
			
			if (sizeof($file) == 1) {
				$fil = (AJAX ? '../' : 'app/') . 'utilities/'.ucfirst(strtolower($file[0])).'.php';
				if (file_exists($fil)) {
					include_once((AJAX ? '../' : 'app/') . 'utilities/'.ucfirst(strtolower($file)).'.php');
				}
				return;
			}

			foreach ($file as $f) {
				if (file_exists((AJAX ? '../' : 'app/') . 'utilities/'.ucfirst(strtolower($f)).'.php')) {
					include_once((AJAX ? '../' : 'app/') . 'utilities/'.ucfirst(strtolower($f)).'.php');
				}
			}
			return;
		}

		if (include_once((AJAX ? '../' : 'app/') . 'utilities/'.ucfirst(strtolower($file)).'.php')) {
			include_once((AJAX ? '../' : 'app/') . 'utilities/'.ucfirst(strtolower($file)).'.php');
		}else{
			trigger_error($file . ' No existe.', E_USER_ERROR);
		}
		

	}
}


?>