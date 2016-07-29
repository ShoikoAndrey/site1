<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));

require_once ROOT.'\components\Router.php';
require_once ROOT.'\config\Database.php';


$router = new Router();
$router->run();

echo '<br>';

//echo var_dump(preg_match('`([0-9]{4})-([0-9]{2})-([0-9]{2})`', '2005-12-11'));
//$replacement = "Year $1 Mount $2 Day $3";
//echo preg_replace('`([0-9]{4})-([0-9]{2})-([0-9]{2})`', $replacement, '2005-12-11');
