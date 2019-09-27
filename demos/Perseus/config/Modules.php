<?php
namespace Perseus\config;


class Modules {
    public function listModules() {
        return [
            'PerseusSecurity' => function ($text) { return $text;},
        ];
    }
}
