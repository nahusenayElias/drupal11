<?php

namespace Drupal\react_list\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

class ReactListController extends ControllerBase
{

    public function react_list() {
        return [
            "#markup" => '<div id="react-app"></div>',
            "#attached" => [
                "library" => ["react_list/react_list"],
            ],
        ];
      }

}