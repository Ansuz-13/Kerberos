<?php

namespace Modules\HttpRouter\Validator;

use Core\interfaces\Event;
use Core\interfaces\EventValidator;

final class HttpRouterValidator implements EventValidator
{
    public function isValid(Event $event): bool
    {
        return true;
    }
}
