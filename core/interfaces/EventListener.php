<?php
namespace Core\interfaces;

use Core\interfaces\Event;
use Core\interfaces\EventValidator;

use Closure;
interface EventListener
{
    public function add(EventValidator $validator, Closure $callback) : void;
    public function emit(Event $event) : void;
}
