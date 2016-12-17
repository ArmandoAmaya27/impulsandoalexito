<?php  

// --------------------------------------------------------------
final class Boots{


	// --------------------------------------------------------------

	/**
	 * Genera un input simple de bootstrap - doc http://getbootstrap.com/css/#forms-controls
	 * 
	 * @param string $type - Tipo de input
	 * @param string $name - Nombre del input y tambien se coloca en el id más la palabra -Id
	 * @param string $value - Contenido del input
	 * @param string $plc - Placeholder del input
	 * @param stirng $clases - Clases adicionales a las que ya trae el input
	 * @param bool $req - Si es true coloca el atributo required en el input
	 * 
	 * @return Un input simple de bootstrap
	 */

	final public static function input($type, $name, $value = '', $plc = '', $clases = '', $req = false){

		return "<input type=\"$type\" name=\"$name\" value=\"$value\" class=\"form-control $clases\" id=\"$name-Id\" placeholder=\"$plc\" ".((is_bool($req) && !$req) ? '' : "required").">";
	}


	// --------------------------------------------------------------

	/**
	 * Genera un textarea de bootstrap - doc http://getbootstrap.com/css/#forms-controls
	 * 
	 * @param string $name - Nombre del textarea y tambien se coloca en el id más la palabra -Id
	 * @param string $value - Contenido del textarea
	 * @param string $plc - Placeholder del textarea
	 * @param string $class - Clases adicionales que puede tener le textarea
	 * 
	 * @return Un textarea de bootstrap
	 */

	final public static function textarea($name, $value = '', $plc = '', $class = ''){
		return "<textarea name=\"$name\" id=\"$name-id\" class=\"form-control\" placeholder=\"$plc\">$value</textarea>";
	}

	// --------------------------------------------------------------

	/**
	 * Genera un radio button de bootstrap - doc doc http://getbootstrap.com/css/#forms-controls
	 * 
	 * @param string $name - Nombre del radio y tambien se coloca en el id más la palabra -Id
	 * @param string $value - Valor del radio button
	 * @param string $cont - Contenido del radio button
	 * @param string $class - Clases adicionales del radio
	 * @param bool $check - Si es true coloca el atributo checked en el radio
	 * 
	 * @return Un radio button de bootstrap
	 */

	final public static function radio($name, $value, $cont = '', $class = '', $check = false) {
		return "<div class=\"radio $class\">
				  	<label>
				  	  <input type=\"radio\" name=\"$name\" id=\"$name-id\" value=\"$value\" ".((is_bool($check) && !$check) ? '' : 'checked').">
				  	  $cont
				  	</label>
				</div>";
	}

	// --------------------------------------------------------------

	/**
	 * Genera un input tipo checkbox de bootstrap - doc http://getbootstrap.com/css/#forms-controls
	 * 
	 * @param string $name - Nombre del checkbox y tambien se le coloca en el id más la palabra -Id
	 * @param string $value - Valor del checkbox
	 * @param string $cont - Contenido que tendrá el checkbox
	 * @param string $class - Clases extras para el checkbox
	 * @param bool $inline - Si es true genera un checkbox en linea, sino genera uno en bloque
	 * @param bool $check - Si es true le coloca el atributo checked al checkbox
	 * 
	 * @return Un input tipo checkbox de bootstrap
	 */
	final public static function checkbox($name, $value, $cont = '', $class = '', $inline = false, $check = false){
		if (is_bool($inline) && !$inline) {
			return "<div class=\"checkbox\">
				  	<label>
				  	  	<input type=\"checkbox\" name=\"$name\" value=\"$value\" id=\"$name-Id\" ".((is_bool($check) && !$check) ? '' : 'checked').">
				  	  	$cont
				  	</label>
				</div>";
		}

		return "<label class=\"checkbox-inline\">
				  	<input type=\"checkbox\" name=\"$name\" value=\"$value\" id=\"$name-Id\" ".((is_bool($check) && !$check) ? '' : 'checked').">
				  	  	$cont
				</label>";
		
	}


	// --------------------------------------------------------------

	/**
	 * Genera un input de selección de bootstrap - doc http://getbootstrap.com/css/#forms-controls
	 * 
	 * @param string $name - Nombre del input de selección y tambien se le coloca en el id más la palabra -Id
	 * @param array $opt - Opciones que van dentro del input
	 * @param $selected - Selecciona una o varias opciones por defecto
	 * @param bool $multiple - Si es true coloca el input en tipo multiple
	 * @param string $class - Clases extras para el input
	 * 
	 * @return Un input de selección de bootstrap
	 */

	final public static function select_input($name, $opt, $selected = '', $multiple = false, $clases = ''){
		
		$op = '';
		if (is_array($selected)) {
			foreach (is_array($opt) ? $opt : array() as $c => $v) {
				$op .= '<option value="'.$c.'" '.((!in_array($c, $selected)) ? '' : 'selected').'>'.$v.'</option>';
			}
		}else{
			foreach ($opt as $c => $v) {
				$op .= '<option value="'.$c.'" '.($selected != $c ? '' : 'selected').'>'.$v.'</option>';
			}
		}
		

		return '<select name="'.$name.''.(!$multiple ? '' : '[]').'" class="form-control '.$clases.'" id="'.$name.'-Id" '.(is_bool($multiple) && !$multiple ? '' : 'multiple').'>
					'.$op.'
				</select>';
	}

	// --------------------------------------------------------------

	/**
	 * Genera un botón dropdwon de bootstrap - doc http://getbootstrap.com/components/#btn-dropdowns
	 * 
	 * @param string $title - Título del botón
	 * @param array $opt - links dentro del botón
	 * @param string $btn - Tipo de botón que puede ser: primary, danger, warning, info y default
	 * 
	 * @return Un botón tipo dropdown
	 */

	final public static function dropdown_button($title, $opt, $btn = 'default', $css = '') {
		$op = '';

		foreach (is_array($opt) ? $opt : array() as $c => $v) {
			$op .= '<li><a href="'.$c.'">'.$v.'</a></li>';
			/*if ($c == 'divider' && $v == 'separe') {
				$op .= '<li role="separator" class="divider"></li>';
			}*/
		}
		return '<div class="btn-group '.$css.'">
					<button type="button" class="btn btn-'.$btn.' dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					    '.$title.' <span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						'.$op.'
					</ul>
				</div>';
	}

	// --------------------------------------------------------------

	/**
	 * Genera un dropdown de bootstrap - doc http://getbootstrap.com/javascript/#dropdowns
	 * 
	 * @param string $title - Título que llevará el botón
	 * @param array $opt - Links que estan dentro del botón
	 * @param string $btn - Tipo de botón, lista: primary, danger, warning, info y default
	 * @param bool $dropup - Si es true la orientación del botón cambia hacia arriba
	 * @param string $class - Clases adicionales
	 * 
	 * @return Un dropdown de bootstrap
	 */

	final public static function dropdown($title, $opt, $btn = 'default', $dropup = false, $class = '') {

		$op = '';
		foreach (is_array($opt) ? $opt : array() as $c => $v) {
			$op .= '<li><a href="'.$v.'">'.$v.'</a></li>';
		}

		return '<div class="'.((is_bool($dropup) && !$dropup) ? 'dropdown' : 'dropup').' '.$class.'">
				  <button class="btn btn-'.$btn.' dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				    '.$title.'
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				    '.$op.'
				  </ul>
				</div>';
	}


	// --------------------------------------------------------------

	/**
	 * Genera un conjunto de input select para una fecha de nacimiento 
	 * 
	 * @param int $min - Desde que año comienza
	 * @param int $max - Hasta que año termina
	 * 
	 * @return Un conjunto de input select para determinar una fecha de nacimiento
	 */

	final public static function birthdate($min, $max, $selected = array()){

		if (sizeof($selected) > 3 || !is_array($selected)) {
			trigger_error('Debe pasar un arreglo de máximo 3 elementos', E_USER_ERROR);
		}else if (!intval($min) || !intval($max)) {
			trigger_error('Los valores a introducir deben ser enteros', E_USER_ERROR);
		}

		$años = array();
		$años[0] = 'Selecciona Año';
		for ($i = $min; $i <= $max ; $i++) { 
			$años[$i] = $i;
		}
		$selected[0] = array_key_exists(0, $selected) ? $selected[0] : null;
		$selected[1] = array_key_exists(1, $selected) ? $selected[1] : null;
		$selected[2] = array_key_exists(2, $selected) ? $selected[2] : null;

		$input = '<div class="row clearfix">
					<div class="col-md-4 col-lg-4 col-xs-12 col-sm-10" style="padding:0 5px;">
						'.self::select_input('year', $años, $selected[0]).'
					</div>';
		
		$input .= '<div class="col-md-4 col-lg-4 col-xs-12 col-sm-10" style="padding:0 5px;">
					'.self::select_input('month', array(
						'0' => 'Selecciona Mes',
						'01' => 'Enero',
						'02' => 'Febrero',
						'03' => 'Marzo',
						'04' => 'Abril',
						'05' => 'Mayo',
						'06' => 'Junio',
						'07' => 'Julio',
						'08' => 'Agosto',
						'09' => 'Septiembre',
						'10' => 'Octumbre',
						'11' => 'Noviembre',
						'12' => 'Diciembre'
					), $selected[1]).'
				</div>';

		$input .= '<div class="col-md-4 col-lg-4 col-xs-12 col-sm-10" style="padding:0 5px;">
					'.self::select_input('day', array(
						'0' => 'Selecciona Dia',
						'01' => '01',
						'02' => '02',
						'03' => '03',
						'04' => '04',
						'05' => '05',
						'06' => '06',
						'07' => '07',
						'08' => '08',
						'09' => '09',
						'10' => '10',
						'11' => '11',
						'12' => '12',
						'13' => '13',
						'14' => '14',
						'15' => '15',
						'16' => '16',
						'17' => '17',
						'18' => '18',
						'19' => '19',
						'20' => '20',
						'21' => '21',
						'23' => '23',
						'24' => '24',
						'25' => '25',
						'26' => '26',
						'27' => '27',
						'28' => '28',
						'29' => '29',
						'30' => '30',
						'31' => '31'
					), $selected[2]).'
				</div>
			</row>';

		return $input;
	}

	// --------------------------------------------------------------
}


?>