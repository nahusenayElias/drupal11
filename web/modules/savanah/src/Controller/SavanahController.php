<?php

namespace Drupal\savanah\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class SavanahController extends ControllerBase {
    public function savanah() {
        return new Response('Hello <b>my savanah</b> module');
    }
}