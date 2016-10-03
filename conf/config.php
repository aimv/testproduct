<?php
define('SMARTY_DIR','libs/');
require_once(''.SMARTY_DIR.'/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = './templates/';
$smarty->compile_dir = './templates_c/';
$smarty->cache_dir = './cache/';
$smarty->caching=true;
