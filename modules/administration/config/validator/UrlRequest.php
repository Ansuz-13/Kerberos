<?php

namespace Modules\administration\config\validator;

use Core\interfaces\event;
use Core\interfaces\EventValidator;

final class UrlRequest implements EventValidator
{
    private $pattern;

    public function __construct(string $pattern)
    {
        $this->pattern = $pattern;
    }

    public function isValid(Event $event): bool
    {
        return
            $event->value('type') === 'url'
            && $event->value('pattern') === $this->pattern;
    }
}
