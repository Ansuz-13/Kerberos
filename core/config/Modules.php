<?php
namespace Core\config;

use Modules\administration\Administration;

class Modules {
    function listModules() {
        return [
            'admin' => function ($text) { return new Administration($text);}
        ];
    }
}
