<?php
namespace Core\interfaces;

use Closure;
use Core\interfaces\Event;
use Core\interfaces\EventValidator;

interface EventListener
{
    public function add(EventValidator $validator, Closure $callback) : void;
    public function emit(Event $event) : void;
}
