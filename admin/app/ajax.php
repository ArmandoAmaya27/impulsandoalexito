<?php  

define('AJAX', true);

require('../../app/config.php');



# Autoloaders
require('../../vendor/autoload.php');
require('../../class/Autoload.php');
Autoload::autoloads();

# Tema de Kint
Kint::$theme = 'solarized-dark';

$request = new Request();

!PROTECTION ?: new Protection();
?>