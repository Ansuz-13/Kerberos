<?php

namespace Core\event;

use Core\interfaces\Event;

final class UrlRequestEvent implements Event
{
    private $values;

    public function __construct(string $pattern)
    {
        $this->values = [
            'pattern' => $pattern,
            'type'    => 'url'
        ];
    }

    public function value(string $name)
    {
        return isset($this->values[$name]) ? $this->values[$name] : null;
    }
}
