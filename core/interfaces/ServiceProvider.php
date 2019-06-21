<?php
namespace Core\interfaces;

use Closure;

interface ServiceProvider
{
    public function add(string $name, Closure $callback) : void;
    public function request(string $name, array $params) : void;
}