<?php 
final class Uploader extends Models{
	final public function __construct(){
		parent::__construct();
	}

	final private function DangerFile($name){
		Util::Requir('Fl');
		if (in_array(strtolower(Fl::fext($name)),array('db','sql', 'html', 'phtml', 'php', 'php5','xml','js', 'css', 'json'))) {
			return true;
		}

		return false;
	}

	final public function uploadTmp(){
		Util::Requir('Fl');
		if (!empty($_FILES) && sizeof($_FILES) > 0) {
			$dir = '../../static/system/.tmp/'.$_POST['tmp'].'/';
			$name = $_FILES['fileUploader']['name'];
			$tmp = $_FILES['fileUploader']['tmp_name'];

			Fl::clearDir($dir);

			if (file_exists($dir . $name)) {
		
				$dir = $dir . time() . $name;
			}else{
				$dir = $dir . $name;
			}


			if ($this->DangerFile($name)) {
				return array('success' => false, 'msg' => '<b>Error: </b>El archivo es peligroso.');
			}

			move_uploaded_file($tmp, $dir);
			return array('success' => true, 'msg' => '<b>Realizado </b>La imagen ha sido cargada.');
		}
		return array('success' => false, 'msg' => '<b>Error: </b>Fallo al subir la imagen.');
	}

	final public function moveToDir($new_dir, $tmp, $copy = false){
		Util::Requir('Fl');
		Fl::clearDir($new_dir);
		if (!is_dir($new_dir)) {
			mkdir($new_dir, 0777,true);
		}

		foreach (glob($tmp . '*') as $file) {
			$name = explode('/', $file);
			$name = end($name);
			if (file_exists($new_dir . $name)) {
				unlink($new_dir . $name);
			}

			copy($file, $new_dir . $name);
			$copy ?: unlink($file);
		}
		$copy ?: Fl::removeDir($tmp);
	}

	final public function removeTmp(){
		Util::Requir('Fl');
		$dir = '../../static/system/.tmp/'.$_POST['tmp'].'/';
		foreach (glob($dir . '*') as $file) {
			if (file_exists($file)) {
				unlink($file);
			}
		}

	}
	
	final public function __destruct(){
		parent::__destruct();
	}
}