<?php

namespace Core\event;

use Closure;
use Core\interfaces\Event;
use Core\interfaces\EventValidator;
use Core\interfaces\EventListener;

final class BaseEventListener implements EventListener
{
    private $events;

    public function __construct()
    {
        $this->events = [];
    }

    public function add(EventValidator $validator, Closure $callback) : void
    {
        $this->events[] = [ 'validator' => $validator, 'callback' => $callback ];
    }

    public function emit(Event $event) : void
    {
        foreach ($this->events as $listener) {
            $validator = $listener['validator'];
            $callback = $listener['callback'];

            if ($validator->isValid($event)) {
                ($callback)($event);
            }
        }
    }
}
