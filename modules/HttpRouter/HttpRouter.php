<?php

namespace Modules\HttpRouter;

use Core\event\HttpRequestEvent;
use Core\interfaces\EventListener;
use Core\interfaces\Module;
use Core\interfaces\ServiceProvider;
use Modules\HttpRouter\Validator\HttpRouterValidator;

final class HttpRouter implements Module
{
    public function register(EventListener $events) : void
    {
        $events->add(
            new HttpRouterValidator(),
            function () { echo 'FIXME: http request handler'; }
        );
    }

    public function services(ServiceProvider $services) : void
    {

    }

    public function canHandle($request) : bool
    {

    }

    public function handle ($request)
    {

    }
}
