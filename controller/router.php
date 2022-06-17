<?php

use Model\Router;

Router::get('/', \controller\IndexController::class, 'index');