<?php
/**
 * Example Application
 *
 * @package Example-application
 */

session_start();

require './libs/Smarty.class.php';
include("funcs/general.php");
$config = include "config.php";
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 120;

try {
	$con = new PDO("mysql:host=$config[dbh];dbname=$config[db]", $config['dbu'], $config['dbp']);
} catch(PDOException $ex) {
	$smarty->assign("errorHeader", "No database connection");
	$smarty->assign("errorMessage", "No connection to the database means no website for you. Such a shizzame.");
	$error = 1;
}

$smarty->assign("title", "Social");

logout();

if (isset($error))
{
	$smarty->display('error.tpl');
} elseif(isset($_SESSION['name'])) {
	$smarty->display('index.tpl');
} else {
	$smarty->display('login.tpl');
}

