<?php

namespace Demos\Perseus\config;

use Modules\administration\Administration;

class Modules {
    public function listModules() {
        return [
            'PerseusSecurity' => function ($text) { return $text;},
            'admin'           => function () { return new Administration('test demo admin'); },
        ];
    }
}
