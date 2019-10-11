<?php

namespace Core\interfaces;

interface ActiveModules
{
    /**
     * Returns the actived modules names.
     *
     * @return string[]
     */
    public function names(): array;
}
