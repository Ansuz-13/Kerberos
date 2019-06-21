<?php

namespace Core\interfaces;

use Core\interfaces\event;

interface EventValidator
{
    public function isValid(Event $event): bool;
}
