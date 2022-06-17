<?php

require_once __DIR__.'/../Model/Autoload.php';

use Model\Router;

use Model\View;

class De{

	function __construct($payload, $mode = 'j'){

		if($mode == 'j'){

			if(is_array($payload)){
				die(json_encode($payload));
			}

			die(json_encode([$payload]));
		}

		if($mode == 'r'){

			ob_start();

			if(is_array($payload) or is_object($payload)){
				print_r($payload);
			}else{
				var_dump($payload);
			}

			$result = ob_get_contents();
			ob_end_clean();

			$result = str_replace([PHP_EOL, " "], ['<br/>', '&nbsp;&nbsp;'], $result);

			die($result);
		}
	}
}

Router::init();