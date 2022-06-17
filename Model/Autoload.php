<?php

function _autoload($file){

	if(!empty($file)){

		$file = explode('\\', $file);

		$file[array_key_last($file)] = $file[array_key_last($file)].'.php';

		$file = __DIR__.'/../'.implode('/', $file);

		if(is_file($file)){

			require_once $file;

		}else{

			die('Class no found: '.$file);
		}
	}
}

spl_autoload_register('_autoload');