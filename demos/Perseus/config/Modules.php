<?php

namespace Demos\Perseus\config;

use Modules\HttpRouter\HttpRouter;

class Modules
{
    public function listModules()
    {
        return [
            'http router' => function () { return new HttpRouter(); },
        ];
    }
}
