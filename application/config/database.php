<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

switch (ENVIRONMENT) {
	case 'development':
    	$active_group = 'development';
		break;
	case 'testing':
	case 'production':
		$active_group = 'production';
		break;
	default:
		exit('The application environment is not set correctly.');
}

$active_record = TRUE;

// development
$db['development']['hostname'] = '';
$db['development']['username'] = '';
$db['development']['password'] = '';
$db['development']['database'] = '';
$db['development']['dbdriver'] = 'sqlite';
$db['development']['dbprefix'] = '';
$db['development']['pconnect'] = TRUE;
$db['development']['db_debug'] = TRUE;
$db['development']['cache_on'] = FALSE;
$db['development']['cachedir'] = '';
$db['development']['char_set'] = 'utf8';
$db['development']['dbcollat'] = 'utf8_general_ci';
$db['development']['swap_pre'] = '';
$db['development']['autoinit'] = TRUE;
$db['development']['stricton'] = FALSE;

// production
$db['production']['hostname'] = '';
$db['production']['username'] = '';
$db['production']['password'] = '';
$db['production']['database'] = '';
$db['production']['dbdriver'] = 'sqlite';
$db['production']['dbprefix'] = '';
$db['production']['pconnect'] = FALSE;
$db['production']['db_debug'] = TRUE;
$db['production']['cache_on'] = FALSE;
$db['production']['cachedir'] = '';
$db['production']['char_set'] = 'utf8';
$db['production']['dbcollat'] = 'utf8_general_ci';
$db['production']['swap_pre'] = '';
$db['production']['autoinit'] = TRUE;
$db['production']['stricton'] = FALSE;
