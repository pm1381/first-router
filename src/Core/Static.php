<?php
define("DIRECTORY_SEPRATOR", "/");
define('ROOT', DIR);
define('SRC', ROOT . 'src' . DIRECTORY_SEPRATOR);
define('TEMPLATE', SRC . 'Template' . DIRECTORY_SEPRATOR);
define('MODEL', SRC . 'Model' . DIRECTORY_SEPRATOR);
define('LIBRARY', SRC . 'Library' . DIRECTORY_SEPRATOR);
define('CORE', SRC . 'Core' . DIRECTORY_SEPRATOR);
define('CONTROLLER', SRC . 'Controller' . DIRECTORY_SEPRATOR);

// adding all require onces
require_once CORE    . 'Config.php';
require_once LIBRARY . 'Function.php';
require_once LIBRARY . 'JDF.php';
require_once LIBRARY . 'simple_html_dom.php';
require_once LIBRARY . 'Mobile_Detect.php';
// and adding all files from library floder