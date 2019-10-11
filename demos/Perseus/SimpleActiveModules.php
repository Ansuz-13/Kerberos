<?php

namespace Demos\Perseus;
use Core\interfaces\ActiveModules;

final class SimpleActiveModules implements ActiveModules
{
    public function names(): array
    {
        return [ 'http router' ];
    }
}
