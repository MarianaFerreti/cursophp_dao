<?php 

spl_autoload_register(function ($class_name) {
	//esse class na frente indica a pasta (class)
    $filename = "class".DIRECTORY_SEPARATOR.$class_name . ".php";

    if (file_exists($filename)) {
        require_once $filename;
    }
});

 ?>