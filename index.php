<?php
require_once __DIR__.'/vendor/autoload.php';

use Core\Core;
use Core\event\UrlRequestEvent;

$core = new Core();

$core->launch();

$core->handle(new UrlRequestEvent('/admin'));
