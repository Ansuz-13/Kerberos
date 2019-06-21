<?php

namespace Core\interfaces;

interface Event
{
    /**
     * [value description]
     * @param string $name
     * @return mixed
     */
    public function value(string $name);
}
