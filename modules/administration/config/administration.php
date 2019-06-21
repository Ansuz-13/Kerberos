<?php
namespace Modules\administration\config;

use Modules\administration\config\validator\UrlRequest;

function listEvent() {
    return array(
        [
            'validator' => new UrlRequest('/createAdmin'),
            'callback'  => function () { echo "Creation d'un admin"; }
        ]
    );
}
