<?php

$routes = [];

function route($action , $callback){
	
	global $routes;
	$action = trim($action,'/');
	$routes[$action]= $callback;
}

function dispatch($action){
	global $routes;
	$actions = trim($action,'/');
	$callback = $routes[$action];
	call_user_func($callback);
}