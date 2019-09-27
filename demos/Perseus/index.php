<?php
require_once __DIR__.'/../../vendor/autoload.php';

use Core\Core;
use Core\event\UrlRequestEvent;
use Perseus\config\Modules;

$core = new Core();

$core->launch(new Modules());

$core->handle(new UrlRequestEvent('/admin'));
