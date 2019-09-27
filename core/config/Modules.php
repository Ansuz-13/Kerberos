<?php
namespace Core\config;

use Modules\administration\Administration;

class Modules {
    function listModules() {
        return [
            'security' => function ($text) { return new Administration($text);},
        ];
    }
}
