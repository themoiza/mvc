<?php

namespace controller;

use Model\View;

use Model\Response;

class IndexController{

	public function index(){

		Response::send(View::load('index', []));
	}
}