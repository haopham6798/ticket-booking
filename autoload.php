<?php

spl_autoload_register(function ($class){
	$prefix = "WS\\ticket\\";
	$base_dir = __DIR__ . '/src/';
	
	$len = strlen($prefix);
	
	if(strncmp($prefix,$class,$len) !== 0){
		return;
	}
	echo "loadingg....";
	$relative_class = substr($class,$len);
	
	$file = $base_dir . str_replace("\\","/",$relative_class) . ".php";
	
	if(file_exists($file)){
		require $file;
	}
})

?>