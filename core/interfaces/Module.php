<?php
namespace Core\interfaces;

interface Module
{
    public function register(EventListener $events) : void;
    public function services(ServiceProvider $services) : void;
    public function canHandle($request) : bool;
    public function handle ($request);
}