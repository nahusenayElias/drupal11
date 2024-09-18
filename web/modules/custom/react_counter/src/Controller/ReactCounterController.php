<?php

namespace Drupal\react_counter\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

class ReactCounterController extends ControllerBase
{

    public function content() {
        return [
            "#markup" => '<div id="react-app"></div>',
            "#attached" => [
            "library" => ["react_list/react_counter"],
            ],
        ];
      }

}