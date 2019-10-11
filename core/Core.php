<?php

namespace Core;

use Core\config\Modules;
use Core\event\BaseEventListener;
use Core\interfaces\ActiveModules;
use Core\interfaces\Event;
use Core\interfaces\EventListener;
use Core\interfaces\Module;

class Core
{
    /** @var ActiveModules */
    private $activeModules;
    /** @var EventListener */
    private $listener;
    /** @var Modules */
    private $modules;

    /**
     * @param ActiveModules $activeModules
     */
    public function __construct(ActiveModules $activeModules)
    {
        $this->activeModules = $activeModules;
        $this->listener = new BaseEventListener();
        $this->modules  = new Modules();
    }

    /**
     * Launches the application.
     *
     * @param array $modules
     */
    public function launch(array $modules): void {
        $usableModules = $this->initModules(
            $this->listActiveModules(
               array_merge($this->modules->listModules(), $modules)
            )
        );

        foreach ($usableModules as $module) {
            $module->register($this->listener);
        }
    }

    /**
     * Handles an event.
     *
     * @param Event $event
     */
    public function handle(Event $event): void
    {
        $this->listener->emit($event);
    }

    private function listActiveModules(array $modules): array
    {
        return array_filter(
            $modules,
            function (string $name) { return in_array($name, $this->activeModules->names()); },
            ARRAY_FILTER_USE_KEY
        );
    }

    /**
     * [initModules description]
     * @param  array $modules [description]
     * @return Module[]
     */
    private function initModules(array $modules): array
    {
        return array_map(
            function ($callback) { return ($callback)('yeah'); },
            $modules
        );
    }
}
