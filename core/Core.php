<?php

namespace Core;

use Core\config\Modules;
use Core\event\BaseEventListener;
use Core\interfaces\Event;
use Core\interfaces\EventListener;
use Core\interfaces\Module;

class Core
{
    /** @var EventListener */
    private $listener;
    /** @var Modules */
    private $modules;

    public function __construct()
    {
        $this->listener = new BaseEventListener();
        $this->modules  = new Modules();
    }

    public function launch(): void {
        $usableModules = $this->initModules(
            $this->listActiveModules(
                $this->modules->listModules()
            )
        );

        foreach ($usableModules as $module) {
            $module->register($this->listener);
        }
    }

    public function handle(Event $event): void
    {
        $this->listener->emit($event);
    }

    private function listActiveModules(array $modules): array
    {
        // $connexion = new Bdd();
        // $pdo = $connexion->connexion();
        // $connexion->exec(
        //     function () use ($pdo) {
        //         // Préparation de la requete
        //         $pdo->prepare("CALL listActiveModules");
        //         $request = $pdo->execute();
        //         return $pdo->fetchAll(\PDO::FETCH_ASSOC);
        //     }
        // );
        $actives = [ 'toto', 'admin' ];

        return array_filter(
            $modules,
            function (string $name) use ($actives) { return in_array($name, $actives); },
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
