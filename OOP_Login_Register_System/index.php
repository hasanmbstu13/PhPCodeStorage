<?php 
require_once 'core/init.php';

// So in this way we need more code in public page
// Instead we use helper method
// $users = DB::getInstance()->query('SELECT username FROM users');
// if($users->count()) {
// 	foreach ($users as $user) {
// 		echo $user->username;
// 	}
// }

// It will more simple in this way
// $users = DB::getInstance()->get('users', array('username', '=', 'alex'));
// Something like
// $users = DB::getInstance()->get('users', array('points', '>', '5'));
// if($users->count()) {
// 	foreach ($users as $user) {
// 		echo $user->username;
// 	}
// }

// We can do this but this massy what happens if we change the name like config
// $GLOBALS['config']['mysql']['host'];

// echo Config::get('mysql/host/hello'); // '127.0.0.1'
// Fatal error: Call to private DB::__construct() from invalid context
// $db = new DB();

// $db = new DB();
// $db = new DB();
// $db = new DB();
// $db = new DB();
// $db = new DB();

DB::getInstance();
DB::getInstance();
DB::getInstance();
DB::getInstance();
DB::getInstance();
