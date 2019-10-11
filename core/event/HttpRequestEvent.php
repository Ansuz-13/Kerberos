<?php

namespace Core\event;

use Core\interfaces\Event;
use Symfony\Component\HttpFoundation\Request;

final class HttpRequestEvent implements Event
{
    private $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    public function value(string $name)
    {
        return 'http request event';
    }
}
