<?php
/***********************************************************************************
PHP-Mini-Framework written by James Harvey <jchharvey@wdscreations.com>

PHP-Mini follows the architecture of an MVC-Framework, and therefore adheres to
this architecture. the file .htaccess is Required, otherwise the application
will fail to launch successfully with the url-rewritting.

All Items displayed on the Screen are controlled via the "Views" Folder.

The Home screen is in the Views folder itself.

Virtually all items rendered are rendered through CSS except the page's Back-
ground. 

************************************************************************************

Written and Developed by James Harvey jchharvey@wdscreations.com

************************************************************************************/
//Loads the Configurables
require_once('lib/config.php');
//Initializes the APP
$app = new App;