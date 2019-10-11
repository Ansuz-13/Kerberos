<?php

namespace Core\interfaces;

interface Module
{
    /**
     * [register description]
     *
     * @param EventListener $events
     */
    public function register(EventListener $events) : void;

    /**
     * [services description]
     *
     * @param ServiceProvider $services
     */
    public function services(ServiceProvider $services) : void;

    /**
     * [canHandle description]
     *
     * @param [type] $request 
     *
     * @return bool
     */
    public function canHandle($request) : bool;

    /**
     * [handle description]
     *
     * @param [type] $request
     *
     * @return [type]
     */
    public function handle ($request);
}
