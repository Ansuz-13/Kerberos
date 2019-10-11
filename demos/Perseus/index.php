<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Core\Core;
use Core\event\HttpRequestEvent;
use Demos\Perseus\config\Modules;
use Demos\Perseus\SimpleActiveModules;

$core = new Core(new SimpleActiveModules());

$core->launch((new Modules())->listModules());

$core->handle(new HttpRequestEvent());
