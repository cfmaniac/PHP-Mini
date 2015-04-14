<?php

// Global Variables
define("APP_NAME","PHP-Mini&trade;");
define("APP_VERSION","2.5.2");
define("APP_BUILD","0.0.3");
define("APP_DESCRIPTION","This is a lightweight & Powerful PHP-MVC Framework.");
define("APP_VIEWPORT", '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />');
define("APP_COPY", "&copy; 2010-".date("Y")."WDSCreations.com");
define("APP_DEVELOPER", "James Harvey <jchharvey@wdscreations.com>");
define("APP_KEYWORDS","host concepts, hcmini");
define("PASSWORD_SALT","HCMINI-252");
define("CACHE_ENABLE",false); //True or False
define("BASE_DIR",dirname(dirname(__FILE__)));
define("LIB_DIR",dirname(__FILE__));

// Be sure to set these!
// BASE URL for Production Server:
define("BASE_URL","http://php.localhost.com/PHPFW/");

define("COOKIE_DOMAIN","local.com");

// Database Config

$database = array (
	"user"  => "sudo",
	"pass"  => "sith1701",
	"host"  => "localhost",
	"dbname" => "phpmini"
);

// The following controllers/actions will not be cached:
$do_not_cache = array("user","home", "tables", "waitl", "resvs", "managers");

require_once(LIB_DIR."/functions.php");
require_once(LIB_DIR."/models/cache.php");
require_once(LIB_DIR."/models/database.php");
require_once(LIB_DIR."/models/user.php");
require_once(LIB_DIR."/models/template.php");