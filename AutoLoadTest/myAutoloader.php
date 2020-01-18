<?php 
spl_autoload_register();

function myAutoLoader($classname){
	$path = "src/";
	$extention = ".php";
	$fullPath = $path.$classname.$extention;
	include_once $fullPath;
}

?>