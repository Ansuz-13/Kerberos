<?php
namespace Modules\administration;
use Core\interfaces\EventListener;
use Core\interfaces\Module;
use Core\interfaces\ServiceProvider;
use Modules\administration\config\validator\UrlRequest;

class Administration implements Module
{
    public function __construct($text)
    {
        echo "Administration " . $text;
    }

    public function register(EventListener $listener): void
    {
        $events = $this->listEvents();

        foreach ($events as $event) {
            $listener->add($event['validator'], $event['callback']);
        }
    }

    public function services(ServiceProvider $services): void
    {
        // TODO: Implement services() method.
    }

    public function canHandle($request): bool
    {
        // TODO: Implement canHandle() method.
    }

    public function handle($request)
    {
        // TODO: Implement handle() method.
    }

    private function listEvents(): array
    {
        return [
            [
                'validator' => new UrlRequest('/createAdmin'),
                'callback'  => function () { echo "Creation d'un admin"; }
            ]
        ];
    }
}
