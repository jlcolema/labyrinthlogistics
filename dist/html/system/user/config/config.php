<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['index_page'] = '';
$config['is_system_on'] = 'y';
$config['multiple_sites_enabled'] = 'n';
$config['show_ee_news'] = 'n';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system_configuration_overrides.html

$config['app_version'] = '5.2.2';
$config['encryption_key'] = 'b74b96f02173c35c8994192d8834ee8afc18e5ca';
$config['session_crypt_key'] = 'e4168703ddce7828a3eff7e3998587a45943fc1e';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'localhost',
		'database' => 'labyrinthlogistics',
		'username' => 'root',
		'password' => 'root',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => ''
	),
);

// EOF